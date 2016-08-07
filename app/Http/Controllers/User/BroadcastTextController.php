<?php

namespace App\Http\Controllers\User;

class BroadcastTextController extends UserController
{
    public function getIndex()
    {
        return user_view('broadcast_text.index');
    }
}
