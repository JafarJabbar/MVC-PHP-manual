<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/29/2019
 * Time: 4:22 AM
 */
function send_email($email,$name,$subject,$message){
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host       = setting('smtp_host');
        $mail->SMTPAuth   = true;
        $mail->Username   = setting('smtp_mail');
        $mail->Password   = setting('smtp_password');
        $mail->SMTPSecure = setting('smtp_secure');
        $mail->Port       = setting('smtp_port');

        //Recipients
        $mail->setFrom(setting('smtp_sender_email'),  setting('smtp_sender_name'));
        $mail->addAddress($email, $name);


        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = nl2br($message);


        $mail->send();
      //  echo 'Message has been sent';
        return true;
    } catch (Exception $e) {
        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
}