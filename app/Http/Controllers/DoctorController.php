<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function addDoctor(Request $request){
        $doctor= new Doctor();
        $doctor->chamer_id=$request->chamer_id;
        $doctor->dept_id=$request->dept_id;
        $doctor->DoctorName=$request->DoctorName;
        $doctor->DoctorQualification=$request->DoctorQualification;
        $doctor->DoctorSpecialty=$request->DoctorSpecialty;
        $doctor->languageSpoken=$request->languageSpoken;
        $doctor->Designation=$request->Designation;
        $doctor->Institute=$request->Institute;
        $doctor->chamber_time=$request->chamber_time;
        $doctor->off_day=$request->off_day;
        $doctor->floor_number=$request->floor_number;
        $doctor->Room_number=$request->Room_number;
        $doctor->Charge=$request->Charge;
        $doctor->Image=$this->makeImage($request);
        $doctor->save();
        return back()->with('message','Doctor add Successfully');
    }
    private function makeImage($request){
        $image=$request->file('Image');
        $imageName=rand().'.'.$image->getClientOriginalExtension();
        $directory='frontEndAsset/doctor-image/';
        $imageUrl=$directory.$imageName;
        $image->move($directory,$imageName);
        return $imageUrl;
    }
    //update
    public function updateDoctor(Request $request){
        $doctor= Doctor::where('id',$request->doctor_id)->first();
        $doctor->chamer_id=$request->chamer_id;
        $doctor->dept_id=$request->dept_id;
        $doctor->DoctorName=$request->DoctorName;
        $doctor->save();
        return redirect('/')->with('message','Doctor Updated Successfully');
    }
    //delete
    public function deleteDoctor($id){
        $doctor= Doctor::find($id);
        $doctor->delete();
        return back();
    }
}
