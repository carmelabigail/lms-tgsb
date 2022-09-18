<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Leave;
use DB;

class ApproveRejectController extends Controller
{
    public function approve($id) {
        $leave = Leave::find($id);
        return view('employeeleave', compact('leave'));
    }

    public function update(Request $request, $id) {

        $leave = Leave::find($id);
        $update =DB::table('leave')
        ->where('id', $id)
        ->update(['status' => 'Approved']);
        return redirect('admindashboard')->with('message', 'Leave approved!');
    }

    

    public function reject(Request $request, $id) {

        $leave = Leave::find($id);
        $update =DB::table('leave')
        ->where('id', $id)
        ->update(['status' => 'Rejected']);

        //$leave->remarks = $request->input('remarks');
        //$leave->status = Approved;
        //DB::table('leave')->where('status/'.$id,'Pending')->update(['status/'.$id => 'Approved']);

        // Set the passed record to a status of what ever is passed in the Request
        //$leave->status = $request->input('status');
        //$leave->save();
        return redirect('admindashboard')->with('rejected', 'Leave rejected!');
    }

}
