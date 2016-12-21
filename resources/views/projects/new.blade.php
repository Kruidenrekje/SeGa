@extends('layouts.app')
@section('content')

<div class="container">
<title>Add project</title>
	<h1>Add project</h1>

<form method="POST" name="project">
   {{ csrf_field() }}
   <div class="form-group">
       <label for="mechanic">Select mechanic</label>
       <select name="mechanic" class="form-control">
				 @foreach($mechanics as $mechanic)
              <option value="{{$mechanic->id}}">{{$mechanic->name}}</option>
				@endforeach
       </select>
   </div>
   <input type="submit" name="submit" class="btn btn-succes" value="Create">
</form>
</div>
@endsection
