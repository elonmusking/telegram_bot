<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Log;
use TelegramBot\Api\Client;

class WebhookController extends Controller
{
    public function index()
    {
        $telegram = new Client(config('services.telegram_bot.api_token'), config('services.telegram_bot.api_tracker'));

        $telegram->command('start', function ($message) use ($telegram) {
            $telegram->sendMessage($message->getChat()->getId(), $message->getText());
        });

        $telegram->command('check', function ($message) use ($telegram) {
            $telegram->sendMessage($message->getChat()->getId(), 'check');
        });

        $telegram->command('help', function ($message) use ($telegram) {
            $telegram->sendMessage($message->getChat()->getId(), 'help');
        });

        $telegram->run();
    }

    public function send()
    {
        $chatId = 439046531;

        $messageText = 'Hello world';

        $bot = new \TelegramBot\Api\BotApi(config('services.telegram_bot.api_token'));

        $keyboard = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup(
            [
                [
                    ['text' => 'link', 'url' => 'https://core.telegram.org']
                ]
            ]
        );

        $bot->sendMessage($chatId, $messageText, null, false, null, $keyboard);
    }
}