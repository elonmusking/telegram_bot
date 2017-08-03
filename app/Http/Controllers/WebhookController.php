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



            Log::info('chat_id: ' . $message->getChat()->getId());
        });

        $telegram->run();
    }

    public function send()
    {
        $chatId = 439046531;

        $messageText = 'Hello world';

        $bot = new \TelegramBot\Api\BotApi(config('services.telegram_bot.api_token'));
        
        $bot->sendMessage($chatId, $messageText);
    }
}