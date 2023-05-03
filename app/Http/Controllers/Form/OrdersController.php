<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Http\Requests\Orders;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        return view('form.orders');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Orders $request)
    {
        $fields = $request->only('name', 'tel', 'email', 'comment');
        $feedback = Order::create($fields);

        if ($feedback) {
            return redirect()->route('orders');
        }
        return back();
        
        //$fields = $request->all();
        //$field = json_encode($fields);
        //Storage::disk('local')->put('orders.json', $field);
        //Storage::append('orders.json', $field); 
    }
}
