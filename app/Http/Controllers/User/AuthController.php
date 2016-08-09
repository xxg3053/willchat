<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Validator;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers {sendFailedLoginResponse as sendFailedLoginResponseRedirect;}
    use ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/user';

    /**
     * Where to redirect users after logout.
     *
     * @var string
     */
    protected $redirectAfterLogout = '/';

    /**
     * Login view.
     *
     * @var string
     */
    protected $loginView = 'user.auth.login';

    /**
     * Logout view.
     *
     * @var string
     */
    protected $registerView = 'user.auth.register';

    /**
     * Login via username.
     *
     * @var string
     */
    protected $username = 'name';

    /**
     * Create a new authentication controller instance.
     */
    public function __construct()
    {
        //        $this->middleware('guest', ['except' => ['user/logout', 'user/lock']]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     *
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * 登录成功后操作.
     *
     * @param Request $request
     * @param User    $user
     */
    public function authenticated(Request $request, User $user)
    {
        // 最后登录时间和IP
        $user->last_login_at = time();
        $user->last_login_ip = $request->getClientIp();
        $user->save();

        // 如果是 AJAX 请求则返回 JSON 数据
        if ($request->ajax() && $request->wantsJson()) {
            return success('登录成功', $this->redirectPath());
        }

        return redirect()->intended($this->redirectPath());
    }

    /**
     * Get the failed login response instance.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        // 如果是 AJAX 请求则返回 JSON 数据
        if ($request->ajax() && $request->wantsJson()) {
            return error($this->getFailedLoginMessage());
        }

        return $this->sendFailedLoginResponseRedirect($request);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            // 如果是 AJAX 请求则返回 JSON 数据
            if ($request->ajax() && $request->wantsJson()) {
                return error($validator->errors()->first());
            }

            $this->throwValidationException(
                $request, $validator
            );
        }

        Auth::guard($this->getGuard())->login($this->create($request->all()));

        // 如果是 AJAX 请求则返回 JSON 数据
        if ($request->ajax() && $request->wantsJson()) {
            return success('注册成功', $this->redirectPath());
        }

        return redirect($this->redirectPath());
    }

    /**
     * Lockscreen.
     *
     * @return mixed
     */
    public function lock()
    {
        if (Auth::check()) {
            $lockedName = Auth::user()->name;
            $lockedAvatar = Auth::user()->avatar;

            // Store userinfo in session.
            Session::put('locked_name', $lockedName, 60);
            Session::put('locked_avatar', $lockedAvatar, 60);

            // logout
            Auth::guard($this->getGuard())->logout();
        } else {
            $lockedName = Session::get('locked_name');
            $lockedAvatar = Session::get('locked_avatar');
        }

        if (!$lockedName) {
            return redirect('user/login');
        }

        return user_view('auth.lock', compact('lockedName', 'lockedAvatar'));
    }
}
