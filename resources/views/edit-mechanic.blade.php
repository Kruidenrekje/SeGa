@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-md-12">
    <h1>Edit Data</h1>
  </div>
</div>

{{ Form::model($mechanic, array('route' => array('update-mechanic', $mechanic->id), 'method' => 'PUT')) }}

{!!Form::label('name', 'Name')!!}
{!!Form::text('name', $mechanic->name)!!}

<br>

{!!Form::label('description', 'Description')!!}
{!!Form::text('description', $mechanic->description)!!}

<br>

{!!Form::label('label', 'Label')!!}
{!!Form::text('label', $mechanic->label)!!}

{!!Form::submit('Edit')!!}
{!!Form::close()!!}
@endsection
