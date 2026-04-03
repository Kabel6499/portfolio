<?php

declare(strict_types=1);

header('Content-Type: application/json; charset=UTF-8');


function loadEnvFile(string $envFile): array
{
  if (!file_exists($envFile)) {
    return [];
  }

  $env = [];
  foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
    $line = trim($line);
    if ($line === '' || str_starts_with($line, '#') || !str_contains($line, '=')) {
      continue;
    }

    [$key, $value] = explode('=', $line, 2);
    $key = trim($key);
    $value = trim($value);

    if (
      (str_starts_with($value, '"') && str_ends_with($value, '"')) ||
      (str_starts_with($value, "'") && str_ends_with($value, "'"))
    ) {
      $value = substr($value, 1, -1);
    }

    $env[$key] = $value;
    $_ENV[$key] = $value;
  }

  return $env;
}

function getAuthorizationHeader(): string
{
  $header = $_SERVER['HTTP_AUTHORIZATION'] ?? '';
  if ($header !== '') {
    return $header;
  }

  if (!function_exists('getallheaders')) {
    return '';
  }

  $headers = getallheaders();
  if (!is_array($headers)) {
    return '';
  }

  return (string)($headers['Authorization'] ?? $headers['authorization'] ?? '');
}


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}


$envFile = '/root/portfolio/.env';
$env = loadEnvFile($envFile);
if ($env === []) {
  http_response_code(500);
  echo json_encode(['success' => false, 'message' => 'Server configuration missing.']);
  exit;
}


$expectedBearer = $env['CONTACT_API_BEARER'] ?? '';
if ($expectedBearer === '') {
  http_response_code(500);
  echo json_encode(['success' => false, 'message' => 'Server configuration error.']);
  exit;
}

$authHeader = getAuthorizationHeader();
if (!preg_match('/^Bearer\s+(.+)$/i', $authHeader, $matches) || !hash_equals($expectedBearer, trim($matches[1]))) {
  http_response_code(401);
  echo json_encode(['success' => false, 'message' => 'Unauthorized.']);
  exit;
}


$autoload = __DIR__ . '/vendor/autoload.php';
if (!file_exists($autoload)) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Server configuration error. Please install dependencies.']);
    exit;
}
require_once $autoload;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if (!empty($_POST['website'])) {
    echo json_encode(['success' => true]);
    exit;
}


$name    = trim($_POST['name']    ?? '');
$email   = trim($_POST['email']   ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];
if ($name    === '') $errors[] = 'Name is required.';
if ($email   === '') $errors[] = 'Email is required.';
if ($subject === '') $errors[] = 'Subject is required.';
if ($message === '') $errors[] = 'Message is required.';

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}


if (mb_strlen($name) > 100 || mb_strlen($subject) > 200 || mb_strlen($message) > 5000) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Input too long.']);
    exit;
}

define('SMTP_HOST',       $_ENV['SMTP_HOST']       ?? '');
define('SMTP_USER',       $_ENV['SMTP_USER']       ?? '');
define('SMTP_PASS',       $_ENV['SMTP_PASS']       ?? '');
define('SMTP_PORT', (int)($_ENV['SMTP_PORT']       ?? 587));
define('SMTP_ENCRYPTION', ($_ENV['SMTP_PORT'] ?? 587) == 465
    ? PHPMailer::ENCRYPTION_SMTPS
    : PHPMailer::ENCRYPTION_STARTTLS);
define('MAIL_FROM',       $_ENV['MAIL_FROM']       ?? '');
define('MAIL_FROM_NAME',  $_ENV['MAIL_FROM_NAME']  ?? 'Portfolio Contact');
define('MAIL_TO',         $_ENV['MAIL_TO']         ?? '');



$safeName    = htmlspecialchars($name,    ENT_QUOTES, 'UTF-8');
$safeEmail   = htmlspecialchars($email,   ENT_QUOTES, 'UTF-8');
$safeSubject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$safeMessage = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));


$htmlBody = <<<HTML
<!DOCTYPE html>
<html lang="de">
<head><meta charset="UTF-8"><title>Portfolio Contact</title></head>
<body style="font-family:system-ui,sans-serif;background:#0c0c0c;color:#ddd;margin:0;padding:20px;">
  <div style="max-width:560px;margin:0 auto;background:#141414;border:1px solid #242424;border-radius:12px;overflow:hidden;">
    <div style="background:#458ee8;padding:20px 28px;">
      <h1 style="margin:0;color:#fff;font-size:1.1rem;font-weight:600;">Neue Nachricht über das Portfolio-Kontaktformular</h1>
    </div>
    <div style="padding:28px;">
      <table style="width:100%;border-collapse:collapse;">
        <tr>
          <td style="padding:8px 0;color:#666;font-size:.85rem;width:80px;vertical-align:top;">Name</td>
          <td style="padding:8px 0;color:#ddd;font-size:.9rem;">{$safeName}</td>
        </tr>
        <tr>
          <td style="padding:8px 0;color:#666;font-size:.85rem;vertical-align:top;">E-Mail</td>
          <td style="padding:8px 0;font-size:.9rem;"><a href="mailto:{$safeEmail}" style="color:#458ee8;">{$safeEmail}</a></td>
        </tr>
        <tr>
          <td style="padding:8px 0;color:#666;font-size:.85rem;vertical-align:top;">Betreff</td>
          <td style="padding:8px 0;color:#ddd;font-size:.9rem;">{$safeSubject}</td>
        </tr>
      </table>
      <div style="margin-top:20px;padding:16px;background:#0c0c0c;border-radius:8px;border:1px solid #242424;">
        <p style="margin:0;color:#ddd;font-size:.9rem;line-height:1.7;">{$safeMessage}</p>
      </div>
    </div>
  </div>
</body>
</html>
HTML;

$plainBody = "Name: {$name}\nEmail: {$email}\nSubject: {$subject}\n\n{$message}";


try {
    $mail = new PHPMailer(true);

    
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USER;
    $mail->Password   = SMTP_PASS;
    $mail->SMTPSecure = SMTP_ENCRYPTION;
    $mail->Port       = SMTP_PORT;
    $mail->CharSet    = PHPMailer::CHARSET_UTF8;

    
    $mail->setFrom(MAIL_FROM, MAIL_FROM_NAME);
    $mail->addAddress(MAIL_TO);
    $mail->addReplyTo($email, $name);

    
    $mail->isHTML(true);
    $mail->Subject = "Portfolio: {$subject}";
    $mail->Body    = $htmlBody;
    $mail->AltBody = $plainBody;

    $mail->send();

    echo json_encode(['success' => true]);

} catch (Exception $e) {
    error_log('PHPMailer Error: ' . $mail->ErrorInfo);
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Sending failed. Please try again later.']);
}
