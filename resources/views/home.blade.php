@extends('layouts.app')
@section('content')

<div  class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="welcome">
			<h1>Welcome!</h1>
			<hr>
			<h3>Start browsing by selecting a category</h3>
		</div>
			<div class="row">
                <div class="categories">
                <div class="col-xs-6 col-md-4">
                    <div class="btn-group" role="group" aria-label="...">
                        <button type="button" class="btn btn-block">Goal</button>
                        <button type="button" class="btn btn-block">Interaction</button>
                        <button type="button" class="btn btn-block">Movement</button>
                        <button type="button" class="btn btn-block">Puzzle</button>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="btn-group" role="group" aria-label="...">
                        <button type="button" class="btn btn-block">Goal</button>
                        <button type="button" class="btn btn-block">Interaction</button>
                        <button type="button" class="btn btn-block">Movement</button>
                        <button type="button" class="btn btn-block">Puzzle</button>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="btn-group" role="group" aria-label="...">
                        <button type="button" class="btn btn-block">Goal</button>
                        <button type="button" class="btn btn-block">Interaction</button>
                        <button type="button" class="btn btn-block">Movement</button>
                        <button type="button" class="btn btn-block">Puzzle</button>
                    </div>
                </div>

			</div>
        </div>
</div>
@endsection
