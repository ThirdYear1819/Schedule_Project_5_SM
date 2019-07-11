@extends('layouts.dashboard')

@section('content-dashboard')
	<div class="row justify-content-center">
		<h2>All Builings</h2>
	</div>

	<div class="col-3">
		<a class="btn btn-primary" href="{{ route('building.create') }}">Add Building</a>
	</div>
@endsection
