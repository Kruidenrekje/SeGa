@extends('layouts.app')
@section('content')

  <div class="row">
    <div class="col-md-12">
      <h1>Edit mechanic</h1>
    </div>
  </div>
  <div class="row">
    <form class="" action="{{route('mechanic.update',$mechanic->id)}}" method="post">
      <input name="_method" type="hidden" value="PATCH">
      {{csrf_field()}}
      <div class="form-group{{ ($errors->has('name')) ? $errors->first('name') : '' }}">
        <input type="text" name="name" class="form-control" placeholder="Enter Title Here" value="{{$mechanic->name}}">
        {!! $errors->first('name','<p class="help-block">:message</p>') !!}
      </div>
      <div class="form-group{{ ($errors->has('description')) ? $errors->first('title') : '' }}">
        <input type="text" name="description" class="form-control" placeholder="Enter Description Here" value="{{$mechanic->description}}">
        {!! $errors->first('description','<p class="help-block">:message</p>') !!}
      </div>
      <div class="form-group{{ ($errors->has('label')) ? $errors->first('title') : '' }}">
        <input type="text" name="label" class="form-control" placeholder="Enter Description Here" value="{{$mechanic->label}}">
        {!! $errors->first('label','<p class="help-block">:message</p>') !!}
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="save">
      </div>
    </form>
  </div>
  @endsection
