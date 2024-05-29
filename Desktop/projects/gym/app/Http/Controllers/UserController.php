<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showLogin(){
        return view('user.login');
    }

    public function Login( Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            return redirect()->route('user.dashboard')->with(['welcome'=>'welcome']) ;
        }
        else{
            return redirect()->back()->with(['error'=>'you are not registered!']);
        }

       
    }
    function index() {
        return view('user.index');
    }
    function show()  {
        $managers=User::all();
        return view('user.show',compact('managers'));
    }

    function create()  {
        return view('user.create');
    }

    function store(Request $request)  {
        $validator=Validator::make($request->only(["name","email"]),[
            'name' => 'required|string|max:255',
           'email' => 'required|email|max:255',
        ]);
        $existingPhoneNumber=User::where('phone_number',$request->phone_number)->first();
        $existingemail=User::where('email',$request->email)->first();
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if(!($existingPhoneNumber &&  $existingemail)){

            $user=new User;
            $user->name=$request->name;
            $user->email=$request->email;
            $user->phone_number= $request->phone_number;
            $user->password=Hash::make($request->password);
            $user->save();
            return redirect()->route('manager.show');
        }
        else{
            return redirect()->route('manager.show')->withErrors($validator)->withInput();
        }
    }

    function edit(Request $request)  {
        $manager=user::find($request->input('manager_id'));
        return view('user.edit',compact('manager'));
    }

    function update(Request $request)  {
        $manager=User::find($request->input('manager_id'));
        $manager->name=$request->name;
        $manager->email=$request->email;
        $manager->phone_number=$request->phone_number;
        $manager->save();
        $managers=User::all();

        return view('user.show',compact('managers'));
    }

    function destroy(Request $request) {
        $manager=User::find($request->input('manager_id'));
        $manager->delete();
        $managers=User::all();
        return view('user.show',compact('managers'));
    
     }

     function logout(){
        Auth::logout();
        return redirect("/");

     }
}
