<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Api;

class TelegramBotController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function sendMessage(Request $request)
    {
        $telegram = new Api(env('TELEGRAM_BOT_TOKEN'));
        $chatId = 'isi_dengan_id_chat_telegram_kamu';
        $message = $request->input('pesan');

        $reponse = $telegram->sendMessage([
            'chat_id' => $chatId,
            'text' => $message,
        ]);

        return redirect()->back();
    }
}
