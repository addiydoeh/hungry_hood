@extends('layouts.main')
@section('page_title','testView_create')
@section('content')
	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
	{!! Form::open(['url'=>'testView']) !!}
	@include('testView._form',['submit'=>'Add'])	
	{!! Form::close() !!}
@stop