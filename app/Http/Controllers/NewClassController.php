<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\assigned_room;
use \App\request_class;

class NewClassController extends Controller
{
    /*public function requestNewClass(request $req)
    {
    	$subject =$req->input('subjectName');
    	$teacherName =$req->input('teacherName');
    	$startTime =$req->input('startTime');
    	$duration =$req->input('duration');
    	$totalStudent =$req->input('totalStudent');
    	$faculty =$req->input('faculty');
    	$department =$req->input('departmentName');
    	$data = array('subject_name'=> $subject,'teacher_name'=>$teacherName,'start_time'=>$startTime,'duration'=> $duration, 'student_amount'=> $totalStudent);
		
		DB::table('request_classes')->insert($data);
		return view('/professorInput')->with('request_classes',request_class::all());
    }*/

    public function showRequestClass(){
    	return view('professorInput')->with('assigned_rooms',assigned_room::all());
    }
}
