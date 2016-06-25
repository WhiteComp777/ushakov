@extends("admin.base")
@section('content')
<h1>Posts</h1>
<a href="/admin/post/create" class="btn btn-primary">Add New</a>
<hr>
<table class="table">
<thead>
	<tr>
		<th>#</th>
		<th>Title</th>
		<th>Short</th>
		<th>Open</th>
		<th>Status</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
</thead>
<tbody>
@foreach($posts as $post)
<tr>
	<td><a href="/admin/post/{{$post->id}}/edit/">{{ $post->id }}</a></td>
	<td>{{ $post->title }}</td>
	<td>
		{!! $post->short() !!}
	</td>
	<td><a href="http://ushakov.me/#!/post/{{ $post->id }}/" class="btn btn-primary">Open</a></td>
	<td>
	@if($post->active==1)
	<span class="label label-success">Active</span>
	@else
	<span class="label label-danger">Disabled</span>
	@endif
	</td>
<td>
		<a class="btn btn-primary btn-sm" href="/admin/post/{{$post->id}}/edit/">Edit</a>

</td>
	<td>
	<a class="btn btn-danger btn-sm" href="/admin/post/{{$post->id}}/delete">delete</a></td>
</tr>
<!-- <a href="/admin/post/{{$post->id}}/edit/">{{ $post->title }}</a> -->
<!--  -->
<!-- <br> -->
@endforeach
</tbody>
</table>
@endsection('content')