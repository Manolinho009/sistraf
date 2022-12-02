<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    //

    public function chat()
    {
        return view('chat.chatMain');
    }


    public static function getMsg($orig)
    {

        $msg = DB::table('chat1')->where('origem', $orig)->first();

        return $msg;
    }
}
