@extends('layouts.app')
@section('content')


<div class="container">
<title>Add mechanic</title>
	<h1>Add mechanic</h1>

	<form method="post">
	    <div class="form-group">
	        <label for="name">Name</label>
	        <input type="text" name="name" id="name" class="form-control" placeholder="Enter name of the mechanic"/>
	    </div>

	    <div class="form-group">
	        <label for="description">Description</label>
	        <input type="text" name="description" id="description" class="form-control" placeholder="Enter description of the mechanic"/>
	    </div>

			<div class="form-group">
					<label for="label">Labels</label>
					<input type="text" name="label" id="label" class="form-control" placeholder="Enter labels of the mechanic"/>
			</div>

			<div class="form-group">
	     <label for="photo">Upload a gif of the mechanic </label>
	     <input type="file" class="form-control-file" id="mechanicphoto" aria-describedby="whyphoto">
	     <small id="whyphoto" class="form-text text-muted">By uploading a gif where the mechanic is demonstrated, users can easily determine if they want to use this mechanic or not.</small>
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
@endsection
