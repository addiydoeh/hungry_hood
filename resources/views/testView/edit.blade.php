@extends('layouts.main')
@section('page_title','testView_edit')
@section('content')
	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
	{!! Form::model($db_test,['method'=>'PATCH','action'=>['TestViewController@update',$db_test->test_id]]) !!}
	@include('testView._form',['submit'=>'edit'])	
	{!! Form::close() !!}
	<!-- Delete -->
	{!! Form::open(['method' => 'DELETE','url'=>'testView/'.$db_test->test_id])!!}
	{!!  Form::submit('Delete',['class'=>'btn btn-danger'])!!}
	{!! Form::close() !!}
@stop