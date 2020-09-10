<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    // override function username in AuthenticatesUsers
    public function username()
    {
        return 'login_email';
    }

    //override function validateLogin in AuthenticatesUsers
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'login_password' => 'required|string',
        ]);
    }

    //override function validateLogin in AuthenticatesUsers
    protected function attemptLogin(Request $request)
    {
        $user = User::where('email', '=', $request->login_email)->first();
        $role = $user->role_id;

        $data = [
            'email' => $request->login_email,
            'password' => $request->login_password
        ];

        if ($request->remember == trans('remember.Remember Me')) {
            $remember = true;
        } else {
            $remember = false;
        }

        if ($role == User::ROLE['user']) {
            return Auth::guard('web')->attempt($data);
        }

        if ($role == User::ROLE['teacher']) {
            return Auth::guard('admin')->attempt($data);
        }
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        if (method_exists($this, 'hasTooManyLoginAttempts') && $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            if (empty(Auth::guard('admin')->user()->role_id)) {
                return redirect()->route('home');
            }

            if (Auth::guard('admin')->user()->role_id == User::ROLE['teacher']) {
                return redirect()->route('admin');
            }

            if (empty(Auth::guard('web')->user()->role_id)) {
                return redirect()->route('home');
            }

            if (Auth::user()->role_id == User::ROLE['user']) {
                if ($request->id) {
                    return redirect()->route('course.detail', $request->id);
                } else {
                    return $this->sendLoginResponse($request);
                }
            }
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
