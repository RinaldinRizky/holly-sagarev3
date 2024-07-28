<?php
include_once 'db.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/xampp/htdocs/Holly-Saga/vendor/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpass']);
    $Role = 'user';
    $verification_status = '0';

    // checking fields are not empty
    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($phone) && !empty($password) && !empty($cpassword)) {
        // if email is valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // checking email is already exists
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if (mysqli_num_rows($sql) > 0) {
                echo "$email - Already Exists";
            } else {
                // checking password and confirm password match
                if ($password === $cpassword) {
                    $random_id = rand(time(), 10000000);
                    $otp = mt_rand(1111, 9999);

                    // insert data into table without image
                    $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, phone, password, otp, verification_status, Role) 
                    VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$phone}', '{$password}', '{$otp}', '{$verification_status}', '{$Role}')");

                    if ($sql2) {
                        $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                        if (mysqli_num_rows($sql3) > 0) {
                            $row = mysqli_fetch_assoc($sql3);
                            $_SESSION['unique_id'] = $row['unique_id'];
                            $_SESSION['email'] = $row['email'];
                            $_SESSION['otp'] = $row['otp'];

                            $mail = new PHPMailer(true);

                            try {
                                //Server settings
                                $mail->isSMTP();
                                $mail->Host       = 'smtp.gmail.com';
                                $mail->SMTPAuth   = true;
                                $mail->Username   = 'hollysagaofficial@gmail.com';
                                $mail->Password   = 'muot xgbu etnh hwgp'; // Ganti dengan app password
                                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                                $mail->Port       = 587;

                                //Recipients
                                $mail->setFrom('hollysagaofficial@gmail.com', 'Mailer');
                                $mail->addAddress($email, $fname . ' ' . $lname);

                                // Content
                                $mail->isHTML(true);
                                $mail->Subject = 'Registration Successful';
                                $mail->Body    = "Dear {$fname} {$lname},<br>Thank you for registering. Your OTP is: {$otp}";

                                $mail->send();
                                echo 'Registration successful! Please check your email for verification.';
                            } catch (Exception $e) {
                                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                            }
                        }
                    } else {
                        echo "Something went wrong!";
                    }
                } else {
                    echo "Passwords do not match!";
                }
            }
        } else {
            echo "$email - This is not a valid email!";
        }
    } else {
        echo "All input fields are required!";
    }
} else {
    echo "Invalid request method.";
}
?>
