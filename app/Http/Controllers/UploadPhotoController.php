<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\User;
use Hash;
use Session;

class UploadPhotoController extends Controller {

    public function insertphoto() {
        $data = User::all();
        return view('modify', compact('data'));
    }

    public function uploadphoto(Request $request) {
        $this->validate($request, [
            'photo'=>'required',
            'photo.*'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    
    if($request->hasfile('photo')) {

        foreach($request->file('photo') as $image) {

            $name=$image->getClientOriginalName();
            $image->move(public_path().'/image/', $name);
            $data[] = $name;
        }
    }

    $upload_img = new User;
    $upload_img->photo = json_encode($data);
    $upload_img->save();
    return back()->with('success', 'Image uploaded!');
}
        }