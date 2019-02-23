@extends('layouts.dashboard')

@section('content-dashboard')

<div class="card-header text-center"><h1>Dashboard</h1></div>
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="gallery">
            <a target="_blank" href="school_building.jpg">
            <img src="school_building.jpg" alt="5Terre" width="600" height="400">  
            </a>
            <div class="desc">
            <a href="http://localhost:8000/buildingA">Building A</a>
            </div>
    </div>

    <div class="gallery">
            <a target="_blank" href="http://localhost:8000/buildingC">
            <img src="school_building.jpg" alt="Forest" width="600" height="400">
            </a>
            <div class="desc">
            <a href="http://localhost:8000/buildingB">Building B</a>
            </div>
    </div>

    <div class="gallery">
            <a target="_blank" href="http://localhost:8000/buildingC">
            <img src="school_building.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">
            <a href="http://localhost:8000/buildingC">Building C</a>
            </div>
    </div>
	
	@foreach($buildings as $building)
		<div class="gallery">
			<a target="_blank" href="http://localhost:8000/buildingC">
            <img src="school_building.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">
            <a href="http://localhost:8000/buildingC">{{$building->building_name}}</a>
            </div>
		</div>
	@endforeach
	
	<div id="add-building" class="gallery" style="width:123px; text-align: center;cursor: pointer;" >
		<a>
			<img src="add_icon.png" style="width:120px ; height:120px;" >
		</a>
		<div >
            <a href="http://localhost:8000/buildingA">Add</a>
        </div>
            
    </div>
	<div id="dialog" class="addBuilding-dialog" style="
	position: absolute;
	width: 500px;
	height:400px auto;
	border: 1px solid #777;
	background:#e1e1e1; 
	font-family:Times New Roman, Times, serif;
	margin-left: 270px;
	display: none;">
		<div>
			<br>
			<h3 style="text-align: center;font-size: 28px; text-decoration: underline;font-weight: bold;">Create New Building</h3>
				<br>
				<form  action="/home" method="post">
				{{ csrf_field() }}
				<p style="font-size: 18px;">&nbsp;Building Name:<input type="text" id="buildingName" name="buildingName" style="margin-left: 15px;width: 300px;" placeholder="Building Name"></p>
				<p style="font-size: 18px;">&nbsp;Floor Number:<select type="text" id="floorNumber" class="floorNumber" name="floorNumber" onchange="genFloor();" style="margin-left: 23px;width: 300px;" >
				<option value="0" id="decisions">Select Number of Floor</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				</select></p>
				<div id="showfloor" class="showfloor" ></div>
				<p style="font-size: 18px;">&nbsp; Room Name:<input id="roomName" type="text" name="roomName" style="margin-left: 29px;width: 300px;" placeholder="Prefix Room Name"></p>
				
				<input type="submit" id="create" name="create" value="Create" style="margin-left: 186px;width: 80px;height: 40px;display: inline;cursor: pointer; margin-bottom: 10px;" >
				
				<input type="button" id="cancel" value="Cancel" style="margin-left: 30px;width: 80px;height: 40px;display: inline;cursor: pointer; margin-bottom: 10px;">
				</form>
				
		</div>	
	</div>
	<script>
		function addBuilding(){
			window.alert("You have clicked add building!.");
		}
		
			// script for popup dailog to add new building
			$(document).ready(function(){	
				$("#add-building").click(function(){
					$("#dialog").show();
					$("#cancel").click(function(){
						$("#dialog").hide();
					})
					$("#create").click(function(){
						$("#dialog").hide(function(){
							// window.alert("Save hz!.")
						});
					})
				});
			});

			// remove existed element.
			function removeElement(){
				var parentElement = document.getElementById("showfloor");
				while ( parentElement.firstChild){
					parentElement.removeChild(parentElement.firstChild);
				}
			}
			// generate floor for user to input room each floor
			function genFloor(){
				var selected = document.getElementById("floorNumber");
				var show = document.querySelector("#showfloor");
				var NULL = document.getElementById("decisions");
				
				removeElement();
				if(selected.value != NULL.value){
					for( var i=0; i<=selected.value; i++){
						var newpar = document.createElement("p");
							newpar.setAttribute('style','font-size: 18px;');
							newpar.innerHTML = "Floor Number "+[i]+":";
							
						var newinput = document.createElement("input");
							newinput.setAttribute('style','margin-left: 15px;width: 300px;');
							newinput.setAttribute('placeholder','Total Room for Floor '+[i]);
							newinput.setAttribute('type','number');
							newinput.setAttribute('name','floor number '+[i]);
							newinput.setAttribute('classs','floorNumber'+[i]);
							
							newpar.appendChild(newinput);
							show.appendChild(newpar);
						
					}
				} 
				console.log(selected.value);
			}
			function displayBuilding(){
				
			}
	
	</script>
	
</div>
            
@endsection
