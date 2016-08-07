<?php

namespace App\Http\Controllers\User;

use App\Repositories\AccountRepository;

class DashboardController extends UserController
{
    /**
     * @var AccountRepository
     */
    protected $accountRepository;

    /**
     * DashboardController constructor.
     *
     * @param $account
     */
    public function __construct(AccountRepository $account)
    {
        parent::__construct();

        $this->accountRepository = $account;
    }

    /**
     * 用户中心首页显示.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //       dump( get_user_avatar(1));
//
//        exit;

        // 当前用户的全部公众号
        $accounts = $this->accountRepository->all();

        return user_view('dashboard.index', compact('accounts'));
    }
}
