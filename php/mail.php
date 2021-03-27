<?php
    $to = "nazarkolesnikov@gmail.com"; 
    $tema = "Повідомлення користувача/блог 'SVIST'"; 
    $message = "Ваше ім'я: ".$_POST['name']."<br>"; 
    $message .= "E-mail: ".$_POST['email']."<br>"; 
    $message .= "Номер моб. телефону: ".$_POST['phone']."<br>"; 
    $message .= "Повідомлення: ".$_POST['message']."<br>"; 
    $headers  = 'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    mail($to, $tema, $message, $headers); 
?>