<?php

namespace App\Http\Controllers;
use App\Models\Registration;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function Registration(Request $request)
    {
        $request->validate([
            "number"=>"required|max:11",

          ]);

          $registration = Registration::create([
            "full_name"=>$request->full_name,
            "number"=>$request->number,
            "nid_number"=>$request->nid_number,
            "address"=>$request->address,
            "animal"=>$request->animal,
            "bird"=>$request->bird,
            "farmer"=>$request->farmer,
            "licence"=>$request->licence,


          ]);
          return redirect()->route("Registration");
    }
}
