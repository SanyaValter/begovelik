<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;

class AdminController extends Controller
{
    public function admin(){
        return view('admin');
    }
    public function authForm(){
        return view('auth');
    }
    public function auth(AdminRequest $r)
    {
        $data = $r->validated();

        $auth = auth()->attempt($data);

        if(!$auth) {
            return back()->withErrors(['authfailed' => 'Логин и пароль не подходят. Попробуйте ещё раз.']);
        }
        return to_route('admin');
    }
    public function logout()
    {
        auth()->logout();
        return to_route('main');
    }
}
