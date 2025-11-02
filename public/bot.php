<?php

$token = '8401932915:AAEEzghAr73WdRjYDtNjgZ0ykNov8y1juEg';
$webAppUrl = 'https://lynwood-precipitous-oversteadily.ngrok-free.dev'; // сюда вставишь адрес из ngrok

$update = json_decode(file_get_contents('php://input'), true);
$chat_id = $update['message']['chat']['id'] ?? null;
$text = $update['message']['text'] ?? '';

if ($text == '/start') {
    $keyboard = [
        'keyboard' => [
            [
                ['text' => 'Открыть меню', 'web_app' => ['url' => $webAppUrl]]
            ]
        ],
        'resize_keyboard' => true
    ];

    $data = [
        'chat_id' => $chat_id,
        'text' => "Привет! Нажми, чтобы открыть меню 👇",
        'reply_markup' => json_encode($keyboard)
    ];

    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data));
}
