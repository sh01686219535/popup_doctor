<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Department;
use App\Models\Doctor;
use DB;

class HomeController extends Controller
{
    public function index(){
        $branch=Branch::all();
        $department=Department::all();
        $department=DB::table('departments')
                    ->join('branches','departments.chamer_id','branches.id')
                    ->select('departments.*','branches.branchName')
                    ->get();
        $doctor=DB::table('doctors')
                    ->join('branches','doctors.chamer_id','branches.id')
                    ->join('departments','doctors.dept_id','departments.id')
                    ->select('doctors.*','branches.branchName','departments.DeptName')
                    ->get();
        $patient=DB::table('patients')
                    ->join('doctors','patients.doctor_id','doctors.id')
                    ->join('branches','patients.chamer_id','branches.id')
                    ->join('departments','patients.dept_id','departments.id')
                    ->select('patients.*','doctors.DoctorName','branches.branchName','departments.DeptName')
                    ->get();
        return view('frontEnd.home.home',compact('branch','department','doctor','patient'));
    }

    public function getDepartment($id){
        $division = Department::where('chamer_id', $id)->orderBy('DeptName','ASC')->get();

        return json_encode($division);
    }

    public function getDoctor($doctor_id){
        $doctor = Doctor::where('dept_id', $doctor_id)->orderBy('DoctorName','ASC')->get();

        return json_encode($doctor);
    }


    //doctor profile
    public function doctorProfile($id){
        $doctor = Doctor::find($id);
        return view('frontEnd.doctor.profile',compact('doctor'));
    }
}
