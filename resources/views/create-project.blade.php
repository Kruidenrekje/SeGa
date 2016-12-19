@extends('layouts.app')
@section('content')

<div class="container">
<title>Add mechanic</title>
	<h1>Add mechanic</h1>
<!-- {{ Form::model($mechanic, array('route' => array('mechanics', $mechanic->id), 'method' => 'GET')) }}

<form method="POST" name="project">
   {{ csrf_field() }}
   <div class="form-group">
       <label for="mechanic">Select Core mechanic</label>
       <select name="mechanic" class="form-control">
            @foreach($mechanics as $mechanic)
              <option value="{{$mechanic->name}}">{{$mechanic->name}}</option>
            @endforeach
       </select>
 -->

   </div>
   <input type="submit" name="submit" class="btn btn-succes" value="Create">
</form>
</div>

{!!Form::close()!!}
@endsection
