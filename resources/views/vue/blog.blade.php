<div class="head_space"></div>
<nav class="blog_nav">
	<ul>
		<li style="display: none;"><a href="">Поиск</a></li>
	</ul>	
</nav>
<div v-for="post in posts">
<section class="postPreview">
	<h1> @{{ post.title }}</h1>
	@{{{ post.content  }}}
	<a href="#" class="readMore" v-link="{name: 'post', params: { postId: post.id }}">Читать дальше</a>
</section>
</div>