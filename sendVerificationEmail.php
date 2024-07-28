<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$data = json_decode(file_get_contents('php://input'), true);
$email = $data['email'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Ganti dengan host SMTP Anda
        $mail->SMTPAuth = true;
        $mail->Username = 'hollysagaofficial@gmail.com'; // Ganti dengan username email Anda
        $mail->Password = 'wbae irad idfr wudr'; // Ganti dengan password email Anda
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('hollysagaofficial@gmail.com', 'Holly Saga'); // Ganti dengan email pengirim
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'Email Verification';
        $mail->Body = 'Please click the link to verify your email: <a href="https://your-website.com/verify-email.php?email=' . $email . '">Verify Email</a>';

        $mail->send();
        http_response_code(200);
        echo json_encode(['message' => 'Verification email sent.']);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['message' => 'Failed to send verification email.', 'error' => $mail->ErrorInfo]);
    }
} else {
    http_response_code(400);
    echo json_encode(['message' => 'Invalid email address.']);
}
?>
