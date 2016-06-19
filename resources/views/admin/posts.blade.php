@extends("admin.base")
@section('content')
<h1>Posts</h1>
<a href="/admin/post/create" class="btn btn-primary">Add New</a>
<hr>
@foreach($posts as $post)
<a href="/admin/post/{{$post->id}}/edit/">{{ $post->title }}</a>
<a href="/admin/post/{{$post->id}}/delete">x</a>
<br>
@endforeach
@endsection('content')