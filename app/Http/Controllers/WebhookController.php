<?php

namespace App\Http\Controllers;


class WebhookController extends Controller
{
    public function index()
    {
        print_r(config('services'));
//        return 'hello world';
    }
}