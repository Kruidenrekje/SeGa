@extends('layouts.app')
@section('content')
<div class="container">
<h1> My projects </h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Menu</div>
        <div class="panel-body">


            <a href="{{route('create-mechanic')}}" class="btn btn-primary">
                <span class="glyphicon glyphicon" aria-hidden="true"></span>
                Add Project
            </a>
          </div>
        </div>
    </div>

@endsection
