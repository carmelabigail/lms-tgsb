<?php

namespace App\Http\Controllers;
use App\Models\Leave;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class LeaveController extends Controller
{
    function applyleave() {
        return view('applyleave');
    }

    function insert() {
        Leave::create([
        'name' => request('name'),
        'position' => request('position'),
        'typeofleave' => request('typeofleave'),
        'date_start' => request('date_start'),
        'date_end' => request('date_end'),
        'date_return' => request('date_return'),
        'phone_address' => request('phone_address'),
        'reason' => request('reason'),
        'status' => request('status'),
    ]);
    return redirect()->back()->with('message', 'Your request will be processed. Please wait.');
    }

    public function leaveindex()
    {
        $leave = Leave::all();
        return view('admindashboard', compact('leave'));


    }

    public function userindex()
    {
        $leave = Leave::all();
        return view('dashboard', compact('leave'));
        //$leave = Leave::all(auth()-> user()->name);
        //return view('dashboard', compact('leave'));

        //$users = Auth::user()->load('leave');
        //return view('dashboard', ['users' => $users]);

        //$id= Auth::user()->id;
        //$leave['leave'] = DB::table('leave')->where('id', $id)->get();

        //return view('dashboard', ['leave' => $leave]);
        //$user = Auth::user();
        //$leave = Leave::with(['date_start', 'name', 'status']);
        //return view('dashboard', compact('leave'));
        //$leave = DB::table('leave')
            //->where(Auth::user())->get();
            //return view('dashboard', compact('leave'));
        //$leave = Leave::with(['date_start', 'name', 'status'])->where(auth()->user())->get();
        //return view('dashboard',['leave'=>$leave]);
    //}
    }
}
