<?php 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;


    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    if(isset($_POST['send'])){

        // turn on phpmailer
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        // CONFIGURATIONS
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'omatsolasobotie@gmail.com';
        $mail->Password = 'z0hkxltgcikqejhe';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // EMAIL DETAILS
        $mail->setFrom('tsola2002@yahoo.co.uk');
        $mail->addAddress($_POST['email']);
        $mail->isHTML(true);

        $mail->Subject = $_POST["subject"];
        $mail->Body = $_POST["message"];

        $mail->send();

        echo 
        
        "
        <script>
            alert('Sent Successfully');
            document.location.href = 'index.php';
        </script>
        ";

    }

?>