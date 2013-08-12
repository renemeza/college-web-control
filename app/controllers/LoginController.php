<?php

class LoginController extends BaseController
{
    // public $layout = ""
    public function show()
    {
        return View::make('layouts.landing')->nest('content', 'users._login');
    }

    public function login()
    {
        $userdata = array(
        'username' => Input::get('username'),
        'password' => Input::get('password')
        );

        if(Auth::attempt($userdata, true)) {
            if($userdata['username'] === 'admin') {
                Session::put('role', 'admin');
                return Redirect::to('admin');
            }
            Session::put('role', 'user');
            return Redirect::to('app');
        }
        else {
            return Redirect::to('/')
                ->with('errors', array('message' => "Usuario o contraseña incorrectos"));
        }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}

?>