@extends('index')

@section('content')

<div class="box">
  <div class="box-header">
    <h3 class="box-title text-center" style="margin-top: 15px;">Settings</h3>
    <br>
  </div>

{!! Form::open(['route' => 'setting.save', 'method' => 'POST']) !!}

<div class="row">
	<div class="col-md-3">
		{!! Form::label('site_name', 'Site Name') !!}
		{!! Form::text('site_name', null, ['class' => 'form-control']) !!}
	</div>
	<div class="col-md-3">
		{!! Form::label('email', 'Email') !!}
		{!! Form::email('email', null, ['class' => 'form-control']) !!}
	</div>
	<div class="col-md-3">
		{!! Form::label('maintenance', 'Maintenance') !!}
		{!! Form::select('maintenance', ['enabled', 'disabled'], null, ['class' => 'form-control']) !!}
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		{!! Form::label('keywords', 'Site KeyWords') !!}
		{!! Form::textarea('keywords', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		{!! Form::label('description', 'Site Description') !!}
		{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		{!! Form::label('maintenance_message', 'Maintenance Message') !!}
		{!! Form::textarea('maintenance_message', null, ['class' => 'form-control']) !!}
	</div>
</div>

	{!! Form::submit('Save', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top:10px;']) !!}

{!! Form::close() !!}


@endsection