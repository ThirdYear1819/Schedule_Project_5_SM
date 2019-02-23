@extends('layouts.dashboard')

@section('content-dashboard')

<div class="card-header text-center">
    <h1>Building A</h1>
    <a class="button" style="vertical-align:middle" href="http://localhost:8000/switchView"><span>Switch View</span></a>
</div>

<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div id="container" style="height:100%;">
        <table id="customers">
            <tr id="square">
            <th width="20%">Floor</th>
            <th colspan="4">Rooms</th>
            </tr>
            <tr id="square">
            <th>4</th>
            <td>A4.1</td>
            <td>A4.2</td>
            <td>A4.3</td>
            <td>A4.4</td>
            </tr>
            <tr id="square">
            <th>3</th>
            <td>A3.1</td>
            <td>A3.2</td>
            <td>A3.3</td>
            <td>A3.4</td>
            </tr>
            <tr id="square">
            <th>2</th>
            <td>A2.1</td>
            <td>A2.2</td>
            <td>A2.3</td>
            <td>A2.4</td>
            </tr>
            <tr id="square">
            <th>1</th>
            <td onClick="document.location.href='http://localhost:8000/roomA1';">A1</td>
            <td onClick="document.location.href='http://localhost:8000/roomA2';">A2</td>
            <td onClick="document.location.href='http://localhost:8000/roomA1';">A3</td>
            <td onClick="document.location.href='http://localhost:8000/roomA1';">A4</td>
            </tr>                
        </table>
    </div>
</div>
@endsection
