<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.client.index', ['clients' => Client::latest()->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client_data = new Client;
        $client_data->company_id = $request['company_id'];
        $client_data->name = $request['name'];
        $client_data->surname = $request['surname'];
        $client_data->address = $request['address'];
        $client_data->telephone = $request['telephone'];
        $client_data->save();

        return redirect('/client')->with('success', 'Employee created successfully!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('admin.client.edit', [
            'client' => $client
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $existingClient = Client::find($id);
        if ($existingClient) {
            $existingClient->company_id = $request['company_id'];
            $existingClient->name = $request['name'];
            $existingClient->surname = $request['surname'];
            $existingClient->address = $request['address'];
            $existingClient->telephone = $request['telephone'];
            $existingClient->save();
        }
        return redirect('/client')->with('success', 'Client updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return back()->with('success', 'Client Deleted successfully!');
    }
}
