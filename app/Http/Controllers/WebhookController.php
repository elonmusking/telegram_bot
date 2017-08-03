<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Log;
//use TelegramBot\Api\Client;

class WebhookController extends Controller
{
    public function index()
    {
        Log::info('api token: ' . config('services.telegram_bot.api_token'));
        Log::info('request: ' . json_encode($_REQUEST));

        /*
         * $telegram = new Client(config('services.telegram_bot.api_token'), config('services.telegram_bot.api_tracker'));


        $telegram->command('ping', function ($message) use ($telegram) {
            Log::info('chat_id: ' . $message->getChat()->getId());
        });

        $telegram->run();
        */
    }
}