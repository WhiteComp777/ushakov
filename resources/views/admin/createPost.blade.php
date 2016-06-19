@extends("admin.base")
@section('content')
@if(!isset($post))  
<h1>Create Posts</h1>
@else
<h1>Edit {{ $post->title }}</h1>
@endif
<form action="@if(!isset($post))/admin/post @else /admin/post/{{$post->id}} @endif" method="post">
	{{ csrf_field() }}
@if(isset($post))
	<input name="_method" type="hidden" value="PUT">
@endif
<div class="form-group">
	<label for="">Title</label>
	<input type="text" class="form-control" name="title" value="@if(isset($post)){{ $post->title }}@endif">
</div>
<div class="form-group">
	<label for="">SubTitle</label>
	<input type="text" class="form-control" name="subtitle" value="@if(isset($post)){{ $post->subtitle }}@endif">
</div>

<div class="form-group">
	<label for="">Post</label>
	<textarea name="content" id="" cols="30"  class="form-control" rows="10">@if(isset($post)){{ $post->content }}@endif</textarea>
</div>
	<button class="btn btn-success">Submit</button>
</form>
<script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
	tinymce.init({ selector:'textarea', 
	plugins: "code",
	inline_styles : false
  // toolbar: "code",
  // menubar: "tools"
   });
</script>
@endsection('content')