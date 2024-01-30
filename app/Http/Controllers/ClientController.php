<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('clients.index', [
            'clients' => Client::with("Orders")->paginate(35)
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
    public function show(client $clients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(client $clients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, client $clients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(client $clients)
    {
        $clients->delete();

        return redirect()->route('clients.index'); 
    }
}
