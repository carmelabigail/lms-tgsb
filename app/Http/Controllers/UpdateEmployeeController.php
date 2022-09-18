<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

class UpdateEmployeeController extends Controller
{
    public function edit($id) {
        $users = User::find($id);
        return view('editemployee', compact('users'));
    }

    public function update(Request $request, $id) {

        $users = User::find($id);
        $users->name = $request->input('name');
        $users->gender = $request->input('gender');
        $users->position = $request->input('position');
        $users->ic_no = $request->input('ic_no');
        $users->address = $request->input('address');
        $users->phonenumber = $request->input('phonenumber');
        $users->dob = $request->input('dob');
        $users->email = $request->input('email');
        $users->update();
        return back()->with('message', 'Data has been updated!');
    }
}

