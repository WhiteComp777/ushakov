@extends("admin.base")
@section('content')
@if(!isset($post))  
<h1>Create Posts</h1>
@else
<h1>Edit {{ $post->title }} <a href="http://ushakov.me/#!/post/{{ $post->id }}/" class="btn btn-primary">Open</a></h1>
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
	<textarea name="content" id="" cols="30"  class="form-control" rows="32">@if(isset($post)){{ $post->content }}@endif</textarea>
</div>


<div class="form-group">
  <label for="">Active?</label>
  <select name="active" id="" class="form-control">
    <option value="1" @if(isset($post) and $post->active==1) selected @endif >yes</option>
    <option value="0" @if(isset($post) and $post->active==0) selected @endif >no</option>
  </select>
</div>


	<button class="btn btn-success">Submit</button>

</form>




<div style="height: 50px"></div>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
	// tinymce.init({ selector:'textarea', 
	// plugins: "code fullscreen image",
	// inline_styles : false,
	// automatic_uploads: true
 //  // toolbar: "code",
 //  // menubar: "tools"
 //   });

 var editor_config = {
    path_absolute : "/",
    selector: "textarea",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textpattern spellchecker"
    ],
     spellchecker_languages: "Russian=ru,English=en",
    spellchecker_language: "ru",  // default language
    spellchecker_rpc_url: "http://speller.yandex.net/services/tinyspell",

    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media spellchecker",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
  
</script>
<style>
	div.mce-fullscreen{
		z-index: 9999999;
	}
</style>
@endsection('content')