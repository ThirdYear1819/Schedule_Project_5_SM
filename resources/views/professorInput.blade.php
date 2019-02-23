@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div id="container" style="height:100%;">
                        <header>
                          <h2 style="text-decoration: underline;">Professor's Input:</h2>
                          <div id="add-class" class="add-new-class" style="border: 1px solid #777;margin-right: 560px;border-radius: 5px;"><img src="http://localhost:8000/add_icon.png" style="width:20px; height:20px;"> &nbsp;Add new Class</div><br>
                        </header>

                        <!-- pop up request dialog -->
                        <div id="request-dialog" class="request-dialog" style="position: absolute;width: 500px;height:400px auto;border: 1px solid #777;background:#e1e1e1; font-family:Times New Roman, Times, serif;margin-left: 100px;display: none;" >
                            <h3 style="text-align: center;font-size: 28px; text-decoration: underline;font-weight: bold;"><br>Request Form for New Class</h3><br>
                                <form  action="/professorInput" method="post">
                                {{ csrf_field() }}
                                <p style="font-size: 18px;">&nbsp;Teacher Name:<input type="text" id="teacherName" name="teacherName" style="margin-left: 15px;width: 300px;" placeholder=" Teacher Name"></p>
                                <p style="font-size: 18px;">&nbsp; Subject:<input id="subjectName" type="text" name="subjectName" style="margin-left: 61px;width: 300px;" placeholder=" Subject for class">
                                </p>
                                <p style="font-size: 18px;">&nbsp; Start Time:<input id="startTime" type="text" name="startTime" style="margin-left: 39px;width: 300px;" placeholder=" Time to Start Class">
                                </p>
                                <p style="font-size: 18px;">&nbsp; Duration:
                                    <select id="duration" type="text" name="duration" style="margin-left: 45px;width: 300px;">
                                        <option value="0" id="decisions">Select Duration</option>
                                        <option value="1">1:00 h</option>
                                        <option value="2">1:30 h</option>
                                        <option value="3">2:00 h</option>
                                    </select>
                                </p>
                                <p style="font-size: 18px;">&nbsp; Total Student:<input id="totalStudent" type="text" name="totalStudent" style="margin-left: 17px;width: 300px;" placeholder=" Total Student"></p>
                                <p style="font-size: 18px;">&nbsp; Faculty:<input id="faculty" type="text" name="faculty" style="margin-left: 60px;width: 300px;" placeholder=" Faculty name"></p>
                                <p style="font-size: 18px;">&nbsp; Department:<input id="departmentName" type="text" name="departmentName" style="margin-left: 29px;width: 300px;" placeholder=" Department Name"></p>
                                
                                <input type="submit" id="request" name="request" value="Request" style="margin-left: 186px;width: 80px;height: 40px;display: inline;cursor: pointer; margin-bottom: 10px;" >
                                
                                <input type="button" id="cancel" value="Cancel" style="margin-left: 30px;width: 80px;height: 40px;display: inline;cursor: pointer; margin-bottom: 10px;">
                                </form>
                                <button></button>
                            
                        </div>

                        <div id='showRequestClass'>
                            <ul>
                            @foreach($assigned_rooms as $assigned_room)
                                    
                                <li>{{$assigned_room->subject_name}}</li>

                            @endforeach
                            </ul>
                        </div>

                        <table id="customers">
                            <tr>
                            <th>Time</th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            </tr>
                            <tr>
                            <td colspan="7" bgcolor="#c1c1c1" align="middle">Morning</td>

                            </tr>
                            <tr>
                            <td>7:00-8:00</td>
                            <td onclick="openForm()"></td>
                            <td onclick="openForm()"></td>
                            <td onclick="openForm()"></td>
                            <td onclick="openForm()"></td>
                            <td onclick="openForm()"></td>
                            <td onclick="openForm()"></td>
                            </tr>

                            <div class="form-popup" id="myForm">
                                <form action="/action_page.php" class="form-container">
                                <h1>Input Subject</h1>

                                <label><b>Subject</b></label>
                                <input type="text" placeholder="Enter Subject" name="email" required>

                                <label><b>Department</b></label>
                                <input type="text" placeholder="Enter Department" name="psw" required>

                                <button type="submit" class="btn">Save</button>
                                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                                </form>
                            </div>

                            <script>
                            function openForm() {
                                document.getElementById("myForm").style.display = "block";
                            }

                            function closeForm() {
                                document.getElementById("myForm").style.display = "none";
                            }
                            </script>

                            <tr>
                            <td>8:00-9:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>9:00-10:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>10:00-11:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>11:00-12:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td colspan="7" bgcolor="#c1c1c1" align="middle">Noon</td>
                            </tr>
                            <tr>
                            <td>13:00-14:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>14:00-15:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>15:00-16:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>16:00-17:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td colspan="7" bgcolor="#c1c1c1" align="middle">Night</td>
                            </tr>
                            <tr>
                            <td>17:00-18:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>18:00-19:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>19:00-20:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>20:00-21:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- script section -->
    <script>
        $(document).ready(function(){   
            $("#add-class").click(function(){
                $("#request-dialog").show();
                $("#cancel").click(function(){
                    $("#request-dialog").hide();
                })
                $("#request").click(function(){
                    $("#request-dialog").hide(function(){
                        window.alert("Save hz!.")
                    });
                })
            });
        });
    </script>
</div>
@endsection
