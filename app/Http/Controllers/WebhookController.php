<?php

namespace App\Http\Controllers;


class WebhookController extends Controller
{
    public function index()
    {
        echo env('TELEGRAM_API_TOKEN', 'no value');

        return 'hello world';
    }
}