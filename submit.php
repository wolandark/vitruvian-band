<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"]; // Get the message from the form

    // Your Telegram Bot API endpoint and chat ID
    $botToken = '6378000434:AAFl2zkFgzV75hl0kbzpQGia3p6-UJv1cA0';
    $chatID = '6121977456';

    // URL to send the message to the Telegram Bot API
    $url = "https://api.telegram.org/bot{$botToken}/sendMessage?chat_id={$chatID}&text={$message}";

    // Send the message
    file_get_contents($url);

    // Redirect back to the form or a success page
    header("Location: index.html");
    exit();
}
?>

