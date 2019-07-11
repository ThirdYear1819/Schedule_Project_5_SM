@extends('layouts.dashboard')

@section('content')
    <div class="row justify-content-center">
        <h2>Create New Building</h2>
    </div>

    <form class="form-group" action="{{ route('building.store') }}" method="POST">
        <div class="row justify-content-center">
            <div class="col-6">
                <div>
                    <label for="name">Building Name</label>
                    <input class="form-control" id="name">
                </div>
                <div>
                    <label>Total Floor</label>
                    <select class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>
        </div>

    </form>

@endsection