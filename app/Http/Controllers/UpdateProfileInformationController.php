<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UpdateProfileInformationController extends Controller
{
    public function modify() {

        return view('modify');
    }

    public function update(Request $request) {
    $request->validate([
        'address' => ['string', 'min:3', 'max:191', 'required'],
        'phonenumber' => ['string', 'min:3', 'max:191', 'required'],
    ]);

    auth()->user()->update([
        'address'=> $request->address,
        'phonenumber'=> $request->phonenumber,

    ]);
    return back()->with('message', 'Your profile has been updated!');
    }

}
