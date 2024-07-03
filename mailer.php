<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include PHPMailer's autoload file

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'brennerpatrick02@gmail.com';               // SMTP username
        $mail->Password   = 'jjprmbdvpssezjdn';                  // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption
        $mail->Port       = 587;                                    // TCP port to connect to

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('wafulabrenner@gmail.com');                // Add a recipient (your email address)
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = nl2br($message);                           // Convert newlines to <br> tags for HTML content
        $mail->AltBody = $message;                                  // Plain text alternative for non-HTML email clients

        $mail->send();
        // Return JSON response
        echo json_encode(['success' => true]);
    } catch (Exception $e) {
        // Return JSON response
        echo json_encode(['success' => false, 'error' => $mail->ErrorInfo]);
    }
} else {
    // Return JSON response for invalid form submission
    echo json_encode(['success' => false]);
}
?>
