<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\User;

class DeleteUserController extends Controller
{
    public function index() {
        $users = DB::select('select * from users');
        return view('employeelist',['users'=>$users]);
     }
     public function destroy($id) {
        DB::delete('delete from users where id = ?',[$id]);
        return back()->with('success', 'Data has been deleted!');
     }
}
