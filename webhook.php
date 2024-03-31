<?php
$telegramBotToken = 'YOUR_TELEGRAM_BOT_TOKEN';
$chatID = 'YOUR_TELEGRAM_CHAT_ID';

// POST ile gelen veriyi alıyoruz.
// Bu örnekte, 'file_get_contents("php://input")' yerine '$_POST' veya '$_REQUEST' kullanılmıyor,
// çünkü TradingView 'Content-Type' olarak 'text/plain' gönderiyor.
// Bu yüzden veriyi doğrudan okumak gerekiyor.
$messageText = file_get_contents("php://input");

// Eğer mesaj boşsa, varsayılan bir metin belirleyebilirsiniz.
if (empty($messageText)) {
    $messageText = "Bir alarm tetiklendi, ancak mesaj içeriği alınamadı.";
}

// Mesajı URL'ye uygun hale getiriyoruz.
$message = urlencode($messageText);

// Telegram'a mesaj gönder
$response = file_get_contents("https://api.telegram.org/bot$telegramBotToken/sendMessage?chat_id=$chatID&text=$message");

// Telegram API'sinden gelen yanıtı kontrol edebilirsiniz.
// echo $response;
?>
