@extends('layouts.main')
@section('page_title','testView_index')
@section('content')
	<div class="page-header">
		@if(Auth::check())
			welcome {{ Auth::user()->name }}
		@endif
	</div>
	<table class="table">
		<thead>
	      <tr>
	        <th>id</th>
	        <th>name</th>
	        <th>number</th>
	        <th>date update</th>
	        <th>edit</th>
	        
	      </tr>
	    </thead>
	    <tbody>
    		@foreach($db_test as $data)
	      	<tr>	      	
		        <td><a href="{{ url('testView/'.$data->test_id) }}">{{ $data->test_id }}</a></td>
		        <td>{{ $data->test_name }}</td>
		        <td>{{ $data->test_number }}</td>
				<td>{{ $data->updated_at->diffForHumans() }}</td>				
				<td><a href='{{ URL::action('TestViewController@edit', $data->test_id) }}'><i class='glyphicon glyphicon-pencil'></i></a></td>				
							
	        </tr> 
	        @endforeach     
	    </tbody>
	</table>
	<a href="{{ url('testView/create') }}" type="button" class="btn btn-info">Create</a>

@stop