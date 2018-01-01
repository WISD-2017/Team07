<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function getRegister()
    {
        return view('auth/register');
    }

    protected function postRegister(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'account' => $data['account'],
            'password' => bcrypt($data['password']),
        ]);
    }
    protected function storeRegister(array $data)
    {
        Ticketcars::create($data->all());
        return view('auth/login');
    }
}
