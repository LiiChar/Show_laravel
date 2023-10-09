<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_item;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Voronkovich\SberbankAcquiring\Client;

class BusketController extends Controller
{
    public function index () {
        $user = Auth::user();
        $busket = Order::find($user->order_id);

        $busket_items = $busket->order_item;
        $total_price = 0;

        foreach ($busket_items as $index => $item) {
            $product = Product::find($item->product_id);
            $busket_items[$index]['product'] = $product;
            $total_price += $item->price;
        }

        return view('busket', ['items' => $busket_items]);
    }

    public function store ($id) {
        $user = Auth::user();
        $order = Order::find($user->order_id);
        $product = Product::where("id", $id)->first();

        $order_item = Order_item::create([
            'product_id' => $product->id,
            'order_id' => $order->id,
            'price' => $product->price
        ]);

        // $order->order_item()->create([
        //     'product_id' => $product->id,
        //     'price' => $product -> price
        // ]);


        // $item = Order_item::create([
        //     'product_id' => $product->id,
        //     'price' => $product->price
        // ]);


        // $order = new Order;
        // $order->user_id = $user->id;
        // $order->save();

        return back();
    }

    public function create (Request $request) {
        $user = Auth::user();
        $busket = Order::find($user->order_id);
        $busket_items = $busket->order_item;

        $products = [];
        $total_price = 0;

        foreach ($busket_items as $index => $item) {
            $product = Product::find($item->product_id);
            array_push($products, $product);
            $total_price += $item->price;
        }

        $url = 'https://3dsec.sberbank.ru/payment/rest/register.do';


        $data = [
            'userName' => 'T6668011890-api',
            'password' => 'T6668011890',
            'orderNumber' => rand(1000, 10000),
            'amount' => $total_price,
            'returnUrl' => 'http://127.0.0.1/'
        ];

        dump($data);


        $client = new Client([
            'userName' => $data['userName'],
            'password' => $data['password'],
        ]);

        // $result = $client->registerOrder($orderId, $orderAmount, $returnUrl, $params);

        $res = $client->execute('/payment/rest/register.do', [
            'orderNumber' => (string)$data['orderNumber'],
            'amount' => (string)$data['amount'],
            'returnUrl' => $data['returnUrl'],
        ]);

        dd($res);


        // use key 'http' even if you send the request to https://...
        // $options = [
        //     'http' => [
        //         'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        //         'method' => 'POST',
        //         'content' => http_build_query($data),
        //     ],
        // ];
        // $context = stream_context_create($options);
        // $result = file_get_contents($url, false, $context);
        // if ($result === false) {
        //     /* Handle error */
        // }
        // var_dump($result);

        // return redirect($result->returnUrl);
    }

    public function destroy ($id) {

    }
}
