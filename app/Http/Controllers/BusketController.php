<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusketController extends Controller
{
    public function index () {
        $user = Auth::user();

        $busket_items = Order::where('user_id', $user->id);

        return view('busket', ['busket' => $busket_items]);
    }

    public function create () {
        
    }
    
    public function store () {
        
    }

    public function destroy () {
        
    }
}
