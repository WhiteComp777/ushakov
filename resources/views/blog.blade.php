<div class="head_space"></div>
<nav class="blog_nav">
	<ul>
		<li><a href="">Поиск</a></li>
	</ul>	
</nav>
<div v-for="post in posts">
<section class="postPreview">
	<h1> @{{ post.title }}</h1>
	@{{{ post.content | truncate '20' }}}
	<a href="#" class="readMore" v-link="{name: 'post', params: { postId: 5 }}">Читать дальше</a>
</section>
</div>