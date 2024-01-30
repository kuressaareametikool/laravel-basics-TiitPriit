<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('orders.index', [
            'orders' => Order::with("client")->paginate(35)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(order $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, order $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $orders)
    {
        $orders->delete();

        return redirect()->route('orders.index'); 
    }
}
