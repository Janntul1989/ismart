<?php

namespace App\Http\Controllers;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function Registration(Request $request)
    {
      // dd($request->all());
        $request->validate([
            "number"=>"required|min:11|max:11|unique:registrations",
          ], [
            "number.min"=>" The Phone Number field must be at least 11 characters. ",
            "number.max"=>" The Phone Number field must not be greater than 11 characters. ",
            "number.unique"=>" The Phone Number has already been taken",
          ]);

          $registration = Registration::create([
            "full_name"=>$request->full_name,
            "number"=>$request->number,
            "nid_number"=>$request->nid_number,
            "address"=>$request->address,
            "animal"=>$request->animal,
            "bird"=>$request->bird,
            "farmer"=>$request->farm,
            "licence"=>$request->licence,


          ]);
          return redirect()->route("Registration")->with(['message'=>'Successfully Registered']);
    }

    public function login(Request $request)
    {
        $request->validate([
            "number"=>"required",
          ]);

           $user = Registration::where('number','=',$request->number)->first();
          if($user) {
           Auth::loginUsingId($user->id, TRUE);
          return redirect()->back()->with("message","login successful.");
          } else {
          return redirect()->back()->with("message","user not found");
          }
    }
}

