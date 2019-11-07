@extends('template')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h1>Category Table</h1>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th >No</th>
		<th >Name</th>
		<th colspan="2">Action</th>
	</tr>
</thead>
<tbody>
	<tr> 
		@foreach($categories as $row)
		<th>{{$row->id}}</th>
		<th>{{$row->name}}</th>
		<th>
			<a href="{{route('category.edit',$row->id)}}" class="btn btn-warning">Edit</a></th>
			<th><form method="post" action="{{route('category.destroy',$row->id)}}">
				@csrf
				@method ('DELETE')
				<input type="submit" class="btn btn-danger" value="delete" onclick="return confirm('Are u sure')">
				
			</form>
			
		</th>
	</tr>
	@endforeach
</tbody>

	
</table>
</div>

</div>
</div>
@endsection
