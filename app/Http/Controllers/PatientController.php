<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function addPatient(Request $request){
        $patient=new Patient();
        $patient->chamer_id=$request->chamer_id;
        $patient->dept_id=$request->dept_id;
        $patient->doctor_id=$request->doctor_id;
        $patient->patient_name=$request->patient_name;
        $patient->patient_age=$request->patient_age;
        $patient->patient_number=$request->patient_number;
        $patient->patient_email=$request->patient_email;
        $patient->patient_details=$request->patient_details;
        $patient->save();
        return back()->with('message','Patient Add Successfully');
    }
    public function updatePatient(Request $request){
        $patient=Patient::where('id',$request->patient_id)->first();
        $patient->chamer_id=$request->chamer_id;
        $patient->dept_id=$request->dept_id;
        $patient->doctor_id=$request->doctor_id;
        $patient->patient_name=$request->patient_name;
        $patient->patient_age=$request->patient_age;
        $patient->patient_number=$request->patient_number;
        $patient->patient_email=$request->patient_email;
        $patient->patient_details=$request->patient_details;
        $patient->save();
        return back()->with('message','Patient Updated Successfully');
    }

    //delete
    public function deletePatient($id){
        $patient= Patient::find($id);
        $patient->delete();
        return back();
    }
}
