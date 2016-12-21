@extends('layouts.app')
@section('content')

<title>Edit Mechanic</title>
<div class="container">
<div class="row">
  <div class="col-md-12">
    <h1>Edit Data</h1>
  </div>
</div>

{{ Form::model($mechanic, array('route' => array('update-mechanic', $mechanic->id), 'method' => 'PUT')) }}

<form method="post">
      <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control" value="{{ $mechanic->name }}" />
      </div>

      <div class="form-group">
          <label for="description">Description</label>
          <input type="text" name="description" id="description" class="form-control" value= "{{ $mechanic->description }}" />
      </div>

      <div class="form-group">
          <label for="label">Labels</label>
          <input type="text" name="label" id="label" class="form-control" value= "{{ $mechanic->label }}" />
      </div>

      {{ csrf_field() }}
      <input type="submit" name="submit" class="btn btn-primary" value="Save">

      @if (count($errors) > 0)
      {{ csrf_field() }}

      <input action="action" onclick="history.go(-2);" name="cancel" class="btn btn-info" value="Cancel">
      @else
      <input action="action" onclick="history.go(-1);" name="cancel" class="btn btn-info" value="Cancel">
      @endif

      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>

    @endif

  </form>
  </div>
{!!Form::close()!!}
@endsection
