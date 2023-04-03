<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class Departmentcontroller extends Controller
{
    public function addDepartment(Request $request){
       $department= new Department();
       $department->chamer_id=$request->chamer_id;
       $department->DeptName=$request->DeptName;
       $department->save();
        return back()->with('message','Department Add Successfully');
    }
    //update
    public function updateDepartment(Request $request){
        $department= Department::where('id',$request->dept_id)->first();
        $department->chamer_id=$request->chamer_id;
        $department->DeptName=$request->DeptName;
        $department->save();
         return redirect('/')->with('message','Department Updated Successfully');
    }
    //delete
    public function deleteDepartment($id){
        $department= Department::find($id);
        $department->delete();
        return back();
    }
}
