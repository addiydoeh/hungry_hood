@extends('layouts.main')
@section('page_title','testView_show')
@section('content')	
	<table class="table">
		<thead>
	      <tr>
	        <th>id</th>
	        <th>name</th>
	        <th>number</th>
	        <th>date update</th>
	      </tr>
	    </thead>
	    <tbody>    		
	      	<tr>	      	
		        <td><a href="{{ url('testView/'.$db_test->test_id) }}">{{ $db_test->test_id }}</a></td>
		        <td>{{ $db_test->test_name }}</td>
		        <td>{{ $db_test->test_number }}</td>
				<td>{{ $db_test->updated_at->diffForHumans() }}</td>
	        </tr> 	         
	    </tbody>
	</table>
	<a href="{{ url('testView') }}" type="button" class="btn btn-info">back</a>
@stop