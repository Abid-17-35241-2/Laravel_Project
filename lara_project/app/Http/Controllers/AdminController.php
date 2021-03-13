<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Client.clientcreate');
    }

    public function clientlist()
    {
        $client = Client::all();
       return view('Client.clist')->with('client', $client);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $req)
    {
        $client = new Client();

        $client->clientname  = $req->clientname;
        $client->clientemail = $req->clientemail;
        $client->clientpassword = $req->clientpassword;
        $client->address     = $req->address;
        $client->country     = $req->country;
        $client->salary      = $req->salary;
        $client->type        = $req->type;

        $client->save();
        $req->session()-> flash('msg', 'New User Added');
        return redirect('/superadmin/clientlist');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('Client.clientedit')->with('client', $client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $client = Client::find($id);

        $client->clientname  = $req->clientname;
        $client->clientemail = $req->clientemail;
        $client->address     = $req->address;
        $client->country     = $req->country;
        $client->salary      = $req->salary;
        $client->type        = $req->type;

        $client->save();
        $req->session()-> flash('msg', 'Your Data is Upadted');
        return redirect('/superadmin/clientlist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
