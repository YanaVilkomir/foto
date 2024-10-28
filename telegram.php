<?php

/* https://api.telegram.org/bot1635017434:AAGjdhVORNlUbn9GSDWM14PKK0wgUyibjnY/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

// поля из формы
$txt="";
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$message = $_POST['user_message'];
// токен нашего бота из botFather
$token = "1635017434:AAGjdhVORNlUbn9GSDWM14PKK0wgUyibjnY";
// $chat_id = "https://api.telegram.org/bot1635017434:AAGjdhVORNlUbn9GSDWM14PKK0wgUyibjnY/getUpdates";
$chat_id = "-554651348";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Message: ' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

$new_url = 'https://apolukhina.000webhostapp.com/thank-you.html';

if ($sendToTelegram) {
  header('Location: '.$new_url);
} else {
  echo "Error";
}
?>
