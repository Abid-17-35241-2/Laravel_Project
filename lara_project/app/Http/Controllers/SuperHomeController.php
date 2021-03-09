<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SuperHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('Superadmin.dashboard');
        // return view('Superadmin.index');
    }
    public function admin()
    {
        return view('Admin.index');
    }
    public function adminlist()
    {
        $admin = Admin::all();
        return view('Admin.list')->with('ad_list' , $admin);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $ad = Admin::find($id);
       return view('Admin.adminedit')->with('ad', $ad);
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
        $ad = Admin::find($id);

        $ad->ad_name = $req->ad_name;
        $ad->ad_email = $req->ad_email;
        $ad->ad_password = $req->ad_password;
        $ad->usertype = $req->usertype;

        $ad->save();
        $req->session()-> flash('msg', 'Your Data is Upadted');
        return redirect('/superadmin/adminlist');
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
