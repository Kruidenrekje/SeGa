@extends('layouts.app')
@section('content')

<div class="container">
<title>Add project</title>
	<h1>Add project</h1>

<form method="POST" name="project">
   {{ csrf_field() }}

	 <div class="form-group">
	     <label for="title">Title</label>
	     <input type="text" id="projectname" class="form-control" placeholder="Enter the name of your game">
	 </div>


<h5> <b> Select mechanics </b></h5>
	 @foreach($mechanics as $mechanic)
	 <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
			{{$mechanic->name}}
    </label>
		 @endforeach
  </div>

		<div class="form-group">
     <label for="description">Description</label>
     <textarea class="form-control" id="projectdescription" rows="3" placeholder="Describe your game here"></textarea>
   </div>

	 <div class="form-group">
    <label for="photo">Upload a screenshot of your game</label>
    <input type="file" class="form-control-file" id="projectphoto" aria-describedby="whyphoto">
    <small id="whyphoto" class="form-text text-muted">By uploading a screenshot of your game, users can easily get a sense of what your game looks like.</small>
  	</div>


   <input type="submit" name="submit" class="btn btn-succes" value="Create">
</form>
</div>
@endsection
