<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;

class BranchController extends Controller
{
    public function addBranch(Request $request){
        $branch= new Branch();
        $branch->branchName=$request->branchName;
        $branch->save();
        return back()->with('message','Branch Add Successfully');
    }
    //update
    public function updateBranch(Request $request){
        $branch= Branch::where('id',$request->branch_id)->first();
        $branch->branchName=$request->branchName;
        $branch->save();
        return redirect('/')->with('message','Branch Update Successfully');
    }
    //delete
    public function deleteBranch($id){
        $branch= Branch::find($id);
        $branch->delete();
        return back();
    }
}
