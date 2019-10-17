<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные, которые отправляет пользователь
$userName = $_POST['username'];
$userPhone = $_POST['phone'];
$userEmail = $_POST['email'];
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "Письмо успешно отправленно";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true;
    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера GMAIL
    $mail->Username   = 'ana.p.a11.08.1996@gmail.com'; // Логин на почте
    $mail->Password   = 'N48t1FZu'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('ana.p.a11.08.1996@gmail.com', 'Анастасия Пляс'); // Адрес самой почты и имя отправителя
    // Получатель письма
    $mail->addAddress('ana.p.a@yandex.ru'); 
        // -----------------------
        // Само письмо
        // -----------------------
        $mail->isHTML(true);
    
        $mail->Subject = 'Заявка с сайта "Ремонт квартир"';
        $mail->Body    = "<b>Имя:</b> $userName <br>
        <b>Телефон:</b> $userPhone<br>
        <b>Email:</b> $userEmail";
// Проверяем отравленность сообщения
if ($mail->send()) {
    echo "Спасибо за заявку, скоро мы Вам перезвоним";
} else {
echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
}
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
?>