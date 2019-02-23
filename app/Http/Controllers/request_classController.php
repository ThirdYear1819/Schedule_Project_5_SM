<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\request_class;

class request_classController extends Controller
{

public function showClass(){
    	$reqs = DB::table('request_classes')
    	->where('student_amount','50')
    	->where('duration','01:00:00')
    	->get();
    	return view('roomA1',['reqs'=>$reqs]);
    }

}
