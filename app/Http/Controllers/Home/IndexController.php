<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use EasyWeChat\Card\Cards\Groupon;
use EasyWeChat\Foundation\Application;

class IndexController extends Controller
{
    public function getIndex()
    {
        $easywechat = new Application(get_wechat_options(16));


        $groupon = new Groupon();

        $card = $easywechat->card;


        dump($groupon->all());
        dump($groupon->toJson());

        $res = $card->create($groupon);
        exit;



//        return view('home.index');
    }
}
