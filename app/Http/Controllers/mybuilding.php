<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\building;

class mybuilding extends Controller
{
    public function insertBuilding(Request $req){
		$buildingName = $req->input('buildingName');
		$floorNumber = $req->input('floorNumber');
		// $eachFloorRoom[];
		// if($floorNumber != NULL){
			// for($i=0; $i<=$floorNumber; $i++){
				// $eachFloorRoom[$i] = $req->('floorNumber').[$i];
			// }
		// }
		$roomName = $req->input('roomName');
		$data = array('Building_Name'=> $buildingName ,'Floor_Number'=>$floorNumber,'Room_Name'=>$roomName);
		
		DB::table('buildings')->insert($data);
		// echo "success";

		return view('/home')->with('buildings',building::all());
	}

	public function showBuilding(){
		return view('/home')->with('buildings',building::all());
	}
}
