@extends("admin.base")
@section('content')
<h1>Portfolios</h1>
<a href="/admin/portfolio/create" class="btn btn-primary">Add New</a>
<hr>
@if($portfolios->count()>0)
<table class="table">
<thead>
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Image</th>
		<th>Link</th>
		<!-- <th>Status</th> -->
		<th>Edit</th>
		<th>Delete</th>
	</tr>
</thead>
<tbody>
@foreach($portfolios as $portfolio)
	<tr>
		<td>{{ $portfolio->id }}</td>
		<td>{{ $portfolio->name }}</td>
		<td><img style="height: 200px; wigth: auto; " src="{{ $portfolio->image }}" alt=""></td>
		<td><a class="btn btn-primary" href="{{ $portfolio->url }}">Open</a></td>
		<td><a class="btn btn-success" href="/admin/portfolio/{{ $portfolio->id }}/edit">Edit</a></td>
		<td><a class="btn btn-danger" href="/admin/portfolio/{{ $portfolio->id }}/delete">Delete</a></td>

		<!-- <td>{{ $portfolio->id }}</td> -->

	</tr>
@endforeach
</tbody>
</table>
@else
<h2>Пока нет ни одного портфолио</h2>
@endif
@endsection('content')