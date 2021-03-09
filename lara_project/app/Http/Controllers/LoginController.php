<?php

namespace App\Http\Controllers;

use App\Superadmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('Login.index');
    }
    public function verify(Request $req){

        $superadmin = Superadmin :: all();
        $superadmin = Superadmin :: where('sa_name', $req->sa_name)
                                  -> where('sa_password', $req->sa_password)
                                  ->get();

        $admin = DB:: table('admins')
                       -> where('ad_name', $req->sa_name)
                       -> where('ad_password', $req->sa_password)
                       ->get();

        if ($req->sa_name == "" || $req->sa_password == "") {

        $req->session()->flash('msg', 'Null username or password');
        return redirect('/login');

       }elseif (count($superadmin) > 0) {

          $req->session()->put('sa_name', $req->sa_name);
         return redirect("/superadmin/dashboard");


       }elseif (count($admin) > 0) {

          $req->session()->put('ad_name', $req->sa_name);
         return redirect("/admin");

        }else {
        //    echo "Invalid User...";
            $req->session()-> flash('msg', 'Invalid Username or password....');
            return redirect('/login');
       }

        return view('Login.index');
    }
}
