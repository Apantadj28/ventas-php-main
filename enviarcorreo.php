<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

class EmailSender {
    private $recipient;
    private $subject;
    private $templateName;
    private $context;

    public function __construct($recipient, $subject, $templateName, $context = []) {
        $this->recipient = $recipient;
        $this->subject = $subject;
        $this->templateName = $templateName;
        $this->context = $context;
    }

    private function renderTemplate() {
        if (!file_exists($this->templateName)) {
            throw new Exception("Template file not found: {$this->templateName}");
        }

        $templateContent = file_get_contents($this->templateName);

        foreach ($this->context as $key => $value) {
            $placeholder = '{{' . $key . '}}';
            $templateContent = str_replace($placeholder, $value, $templateContent);
        }

        return $templateContent;
    }

    public function sendEmail() {
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = $_ENV['SMTP_HOST'];
            $mail->SMTPAuth = true;
            $mail->Username = $_ENV['SMTP_FROM_EMAIL']; 
            $mail->Password = $_ENV['SMTP_PASSWORD']; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587; 
            $mail->addAddress($this->recipient);
            $mail->isHTML(true);

            $mail->Subject = $this->subject;
            $mail->Body = $this->renderTemplate();

            $mail->send();
            echo "Correo enviado con exito";
        } catch (Exception $e) {
            echo "Error al enviar el correo: {$mail->ErrorInfo}";
        }
    }
}