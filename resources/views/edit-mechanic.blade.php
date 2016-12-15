@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-md-12">
    <h1>Edit Data</h1>
  </div>
</div>


<div class="row">
  <form class="" action="" method="post">
    <input name="_method" type="hidden" value="PATCH">
    {{csrf_field()}}
    <div class="form-group{{ ($errors->has('name')) ? $errors->first('name') : '' }}">
      <input type="text" name="name" class="form-control" placeholder="" value="">
      {!! $errors->first('name','<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ ($errors->has('description')) ? $errors->first('description') : '' }}">
      <input type="text" name="description" class="form-control" placeholder="" value="">
      {!! $errors->first('description','<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group{{ ($errors->has('label')) ? $errors->first('label') : '' }}">
      <input type="text" name="label" class="form-control" placeholder="" value="">
      {!! $errors->first('label','<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-primary" value="Save">
    </div>
  </form>
</div>

@endsection
