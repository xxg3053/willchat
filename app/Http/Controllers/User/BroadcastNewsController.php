<?php

namespace App\Http\Controllers\User;

class BroadcastNewsController extends UserController
{
    public function getIndex()
    {
        return user_view('broadcast_news.index');
    }
}
