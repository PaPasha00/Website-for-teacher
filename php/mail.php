<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['user_number'];
$option_1 = $_POST['taskOption'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'web_development_01@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'fyzbC4idkxM37V9E9jaa'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('web_development_01@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('anneta88@inbox.ru');// Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'ОГЭ ЕГЭ Общество История';
$mail->Body    = '' .$name . ' оставил заявку! <br>'  . "Телефон: " .$phone . "<br> Пожелания: " .$option_1 . '';
$mail->AltBody =  '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}
?>