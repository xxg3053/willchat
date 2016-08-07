<?php

namespace App\Http\Controllers\User;

class DataStatsController extends UserController
{
    public function getIndex()
    {
        return user_view('data_stats.index');
    }
}
