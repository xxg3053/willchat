<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Auth;
use View;

class UserController extends Controller
{
    /**
     * UserController constructor.
     */
    public function __construct()
    {
        View::share('user', Auth::user());
    }
}
