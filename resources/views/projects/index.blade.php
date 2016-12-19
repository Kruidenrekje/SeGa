@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
	       <div class="header">
                <h1> My projects </h1>
	       </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Menu</div>
                    <div class="panel-body">
                        <a href="{{route('create-project')}}" class="btn btn-primary">
                            <span class="glyphicon glyphicon" aria-hidden="true"></span>
                            Add Project
                        </a>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
