@extends('layouts.dashboard')

@section('content-dashboard')

<div class="card-header text-center"><h1>Room A1</h1></div>
<div class="card-body">

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <!-- pop up for assigned form -->
    <div class="form-popup" id="myForm" style="margin: 0 0 0 200px;width: 700px;display: none;">
            
        <br><div style="text-align: center;text-decoration: underline;"><h1>Input Subject</h1></div><br>
        <form  action="/roomA1" method="post">
        {{ csrf_field() }}
        <label><b>&nbsp;Subject:</b></label>
        <select name="subject" style="margin:0 0 10px 88px;width: 300px;" required>
            <option value="">Available Class:</option>
            @foreach($reqs as $req)
                <option value="{{$req->subject_name}}">{{$req->subject_name}}</option>
            @endforeach    
        </select><br>

        <label><b>&nbsp;Duration:</b></label>
        <select name="duration" style="margin:0 0 10px 80px;width: 300px;" required>
            <option value="">Hour:</option>
            @foreach($reqs as $req)
                <option value="{{$req->duration}}">{{$req->duration}}</option>
            @endforeach    
        </select><br>

        <label><b>&nbsp;Teacher Name:</b></label>
        <select name="TeacherName" style="margin:0 0 10px 40px;width: 300px;" required>
            <option value="">Teacher Name:</option>
            @foreach($reqs as $req)
                <option value="{{$req->teacher_name}}">{{$req->teacher_name}}</option>
            @endforeach    
        </select><br>
        
        <label><b>&nbsp;Start Time:</b></label>
        <select name="StartTime" style="margin:0 0 10px 68px;width: 300px;" required>
            <option value="">Start Time:</option>
            @foreach($reqs as $req)
                <option value="{{$req->start_time}}">{{$req->start_time}}</option>
            @endforeach    
        </select><br>

        <label><b>&nbsp;Day:</b></label>
        <select name="select_date" style="margin:0 0 10px 112px;width: 300px;" required>
            <option value="">Days:</option>
            @foreach($dates as $date)
                <option value="{{$date->day_name}}">{{$date->day_name}}</option>
            @endforeach    
        </select><br>

        <!-- <label><b>&nbsp;Teacher Name:</b></label>
        <input placeholder="Teacher Name" name="TeacherName" style="margin: 0 0 10px 42px;width: 300px;" required ><br> -->
        
        <!-- <input name="StartTime" value="{{$req->start_time}}" style="margin: 0 0 10px 42px;width: 300px;" type="hidden" required ><br> -->
        
        <!-- <input name="duration" value="{{$req->duration}}" style="margin: 0 0 10px 42px;width: 300px;" type="hidden" required ><br>
        
        <input name="TeacherName" value="{{$req->teacher_name}}" style="margin: 0 0 10px 42px;width: 300px;" type="hidden" required ><br> -->

        
        

        <input type="submit" id="save" name="save" value="Save" style="margin-left: 186px;width: 80px;height: 40px;display: inline;cursor: pointer; margin-bottom: 10px;" >
        
        <input type="button" id="cancel" value="Cancel" style="margin-left: 30px;width: 80px;height: 40px;display: inline;cursor: pointer; margin-bottom: 10px;">
        </form>
    </div>
            

    <!-- <div id="container" style="height:100%;">
        <table id="customers">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="td" colspan="7" bgcolor="#c1c1c1" align="middle">Morning</td>
                </tr>
               <tr>
                    <th class="th">7:00-8:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <th class="th">8:00-9:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>   
                <tr>
                    <th  class="th">9:00-10:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th class="th">10:00-11:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th class="th">11:00-12:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td  class="th" colspan="7" bgcolor="#c1c1c1" align="middle">Noon</td>
                </tr>
                <tr>
                    <th class="th">13:00-14:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th class="th">14:00-15:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th class="th">15:00-16:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th class="th">16:00-17:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td  class="th" colspan="7" bgcolor="#c1c1c1" align="middle">Night</td>
                    </tr>
                    <tr>
                    <th class="th">17:00-18:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th class="th">18:00-19:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th class="th">19:00-20:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th class="th">20:00-21:00</th>
                    <td>
                        @foreach($assigns as $assign)
                            {{$assign->subject_name}}
                        @endforeach  
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div> -->
<hr>
    <div id="container" style="height:100%;">
        <table id="customers">
            <thead>
                <tr>
                    @foreach($dates as $date)
                        <th>{{$date->day_name}}</th>
                    @endforeach
                </tr>    
            </thead>

            <tbody>
                @foreach($times as $time)
                    <tr>
                        <td>{{$time->show_time}}</td>
                        @foreach($dates as $date)
                            @if($date->day_name != "Time")
                                <td>
                                    @foreach($assigns as $assign)
                                    @if($time->db_time == $assign->start_time && $assign->day==$date->day_name)
                                    {{$assign->subject_name}}
                                    @endif
                                    @endforeach
                                </td>
                            @endif
                        @endforeach
                        
                    </tr>
                @endforeach
                <tr>
                    
                </tr>
            </tbody>
        </table>


    <script>
            $(document).ready(function(){   
                // $("td").click(function(){
                //     $("#myForm").show();
                //     $("#cancel").click(function(){
                //         $("#myForm").hide();
                //     })
                //     $("#save").click(function(){
                //         $("#myForm").hide(function(){

                //             // $("td").text('Hello');
                //             // window.alert("Save hz!.");
                //             // window.alert($(#subject).val());
                //             // window.alert($(#).val());
                //         });
                //     })
                // });


                // test
                // $(".table tbody").on('click','td',function(){
                //     var currow = $(this).closest('tr');
                //     var col1 = currow.find('td:eq(0)').text();
                //     var result = col1;
                //     alert(result);
                // })

                // var table = $('#customers').dataTable();
                 
                // $('#customers tbody').on( 'click', 'td', function () {
                //     alert( 'Clicked on cell in visible column: '+table.cell( this ).index().columnVisib);
                // });

                // fit script
                // $('#customers').find('td').click(function(){
                //    alert($(this).text("hello"));
                // });

                $('#customers').find('td').click(function(){
                    // alert($(this).text("hello"));

                    /*in this point we need the value of the time to query out the Available data*/
                    
                    var clickedCell = $(this);
                    
                    $("#myForm").show();
                    $("#cancel").click(function(){
                        $("#myForm").hide();
                    })
                    $("#save").click(function(){
                        $("#myForm").hide(function(){
                            // clickedCell.text("hello");
                            // $("td").text('Hello');
                            // window.alert("Save hz!.");
                            // window.alert($(#subject).val());
                            // window.alert($(#).val());
                        });
                    })
                    

                });
            });
            </script>
</div>
@endsection
