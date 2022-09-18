<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\Leave;

class DeleteAllLeaveController extends Controller
{
    public function index() {
        $leave = DB::select('select * from leave');
        return view('admindashboard',['leave'=>$leave]);
     }
     public function destroy($id) {
        $delete=DB::table('leave')
        ->where('id', $id)
        ->delete();
        return back()->with('success', 'Data has been deleted!');
     }
  }