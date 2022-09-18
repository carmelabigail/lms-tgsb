<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\User;
use Hash;
use Session;

class EntryController extends Controller
{

    function newuser() {
        return view('newuser');
    }

    public function userlogin() {
        return view('userlogin');
    }

    function register(Request $request) {
        //$data = $request->validate([
            //'name'=>'required|max:255',
            //'position'=>'required|max:255',
            //'address'=>'required|max:255',
            //'phone_number' => 'required|unique:users',
            //'email'=> 'required|email|unique:users',
            //'password'=>'required|min:6'
        //]);
        //$data['password'] = bcrypt($data['password']);

        //User::create($data);
        //return redirect()->back()->with('message', 'You have successfully registered this user.');
        User::create([
        'name' => request('name'),
        'position' => request('position'),
        'ic_no' => request('ic_no'),
        'dob' => request('dob'),
        'gender' => request('gender'),
        'address' => request('address'),
        'phonenumber' => request('phonenumber'),
        'email' => request('email'),
        'approved_leave' => request('approved_leave'),
        'password' => bcrypt(request('password')),

    ]);
    return redirect()->back()->with('message', 'You have successfully registered this user.');
    }

    public function loginuser(Request $request) {
        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
        
        if (auth()->user()->is_admin == 1) {
            return redirect()->intended('admindashboard');
        } else {
            return redirect()->intended('dashboard');
        }

        } else {
            return back()->with('fail', 'Please login using your correct email & password!');
        }
    }
            //if (Auth::attempt($credentials)) {
                // Authentication passed...
                //return redirect()->intended('dashboard');
        //} else {
            //return back()->with('fail', 'Please login using your correct email & password!');
        //}
        
        //}

    public function index(){
        $users = DB::select('select * from users');
        return view('employeelist',['users'=>$users]);
        }
    }


