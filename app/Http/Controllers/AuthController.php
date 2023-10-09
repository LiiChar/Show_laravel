<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create () {
        return view('register');
    }

    public function login () {
        return view('login');
    }

    public function store_create()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $order = Order::create();

        $userRequest = [
            'name' => request() -> name,
            'email' => request() -> email,
            'password' => md5(request() -> password),
            'order_id' => $order->id
        ];

        $user = User::create($userRequest);

        auth()->login($user);

        return redirect()->to('/');
    }

    public function store_login(Request $request) {
        $user = User::where('email', $request->email)->first();

        if (md5($request->password) == $user->password) {
            auth()->login($user);
            return redirect()->to('/');
        }

        return redirect()->to('/auth');
    }
}
