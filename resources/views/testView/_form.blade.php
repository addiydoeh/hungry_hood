<div class="form-group">
	{!!  Form::label('test_name','Name : ')!!}
	{!!  Form::input('text','test_name')!!}
	<br>
	{!!  Form::label('test_number','Number : ') !!}
	{!!  Form::input('date','test_number',
					\Carbon\Carbon::now()->format('Y-m-d'),
					['class'=>'form-control']
					)!!}

	{!!  Form::submit($submit,
					['class'=>'btn btn-primary']
					)!!}
</div>