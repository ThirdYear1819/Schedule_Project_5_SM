<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\assigned_room;
use \App\request_class;
use \App\room_time;
use \App\day;

class assigned_roomController extends Controller
{
	

    public function insertClass(Request $req){

    	$TeacherName = $req->input('TeacherName');
    	$subject = $req->input('subject');
    	$duration = $req->input('duration');
    	$StartTime = $req->input('StartTime');
    	$day = $req->input('select_date');
    	// $req = $req->input();
    	$data = array('teacher_name'=>$TeacherName,'subject_name'=>$subject,'start_time'=>$StartTime,'duration'=>$duration,'day'=>$day);
    	DB::table('assigned_rooms')->insert($data);
    	
    	// suggest data for the request_classes
    	$reqs = DB::table('request_classes')
    	// ->where('student_amount','30')
    	// ->where('duration','01:00:00')
    	->get();

    	// show data of assigned class
    	$assigns = DB::table('assigned_rooms')
    	// ->where('student_amount','50')
    	// ->where('duration','01:00:00')
    	->get();

    	$dates = DB::table('days')
    	// ->where('student_amount','50')
    	// ->where('duration','01:00:00')
    	->get();

		$times = DB::table('room_times')
    	// ->where('student_amount','50')
    	// ->where('duration','01:00:00')
    	->get();

    	// $array_data = [
    	// 	'reqs'=>$reqs,
    	// 	'assigns'=>$assigns
    	// ];
    	return view('roomA1',compact('assigns', 'reqs','dates','times'));

    }

    public function showRequest_and_AssignedClass(){

    	
    	$reqs = DB::table('request_classes')
    	// ->where('student_amount','30')
    	// ->where('duration','01:00:00')
    	->get();
    	$assigns = DB::table('assigned_rooms')
    	// ->where('student_amount','50')
    	// ->where('duration','01:00:00')
    	->get();
    	$dates = DB::table('days')
    	// ->where('student_amount','50')
    	// ->where('duration','01:00:00')
    	->get();

		$times = DB::table('room_times')
    	// ->where('student_amount','50')
    	// ->where('duration','01:00:00')
    	->get();

    	return view('roomA1',[
    		'assigns'=>$assigns,
    		'reqs'=>$reqs,
    		'dates' => $dates,
    		'times' => $times
    	]);
    
    }

}
