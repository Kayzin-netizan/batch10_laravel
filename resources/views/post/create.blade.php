@extends('template')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<h1 class="mt-4">Page Create Form</h1>
			@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<form method="post" action="{{route('post.store')}}" enctype="multipart/form-data" >
	@csrf
	<div class="form-group">
		<label>Title</label>
		<input type="text" name="title" class="form-control">
	</div>

	<div class="form-group">
		<label>Content</label>
		<textarea name="content" class="form-control"></textarea>
	</div>
	<div class="form-group">

		<label>Photo</label><span class="text-danger">[supported file types: jpeg,png,jpg ]</span>
		<input type="file" name="photo" class="form-control">
		
	</div>

	<div class="form-group">
		<label>Category</label>
		<select name="category">
			<option value="">Choose Category</option>
			{--accept data and loop --}
			@foreach($categories as $row)
			<option value="{{$row->id}}">
					{{$row->name}}
			</option>
			@endforeach

		</select>
	</div>
	<div class="form-group">
		<input type="submit" name="btnsubmit" class="btn btn-primary" value="Save">
	</div>
</form>
</div>
</div>
</div>