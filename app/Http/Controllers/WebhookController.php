<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Log;

class WebhookController extends Controller
{
    protected $telegram;


    public function index()
    {
        Log::info('Пишет в лог heroku');

//        return 'hello world';
    }
}