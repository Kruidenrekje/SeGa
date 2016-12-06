@extends('layouts.app')
@section('content')


<div class="container">
<title>Mechanic toevoegen</title>
	<h1>Mechanic toevoegen</h1>

	<form method="post">
	    <div class="form-group">
	        <label for="name">Naam</label>
	        <input type="text" name="name" id="name" class="form-control"/>
	    </div>

	    <div class="form-group">
	        <label for="description">Beschrijving</label>
	        <textarea name="description" id="description" class="form-control"/></textarea>
	    </div>

			<div class="form-group">
					<label for="label">Labels</label>
					<textarea name="label" id="label" class="form-control"/></textarea>
			</div>

	    {{ csrf_field() }}
	    <input type="submit" name="submit" class="btn btn-primary" value="Opslaan">

	    @if (count($errors) > 0)
	    {{ csrf_field() }}

	    <input action="action" onclick="history.go(-2);" name="cancel" class="btn btn-info" value="Annuleer">
	    @else
	    <input action="action" onclick="history.go(-1);" name="cancel" class="btn btn-info" value="Annuleer">
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
