<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"]; // Get the message from the form

    // Your Telegram Bot API endpoint and chat ID
    $botToken = '6378177672:AAHBvKEgUKvXIVOPnov3eWKky3MizkaixYQ';
    $chatID = '-266945114';

    // URL to send the message to the Telegram Bot API
    $url = "https://api.telegram.org/bot{$botToken}/sendMessage?chat_id={$chatID}&text={$message}";

    // Send the message
    file_get_contents($url);

    // Redirect back to the form or a success page
    header("Location: index.html");
    exit();
}
?>

