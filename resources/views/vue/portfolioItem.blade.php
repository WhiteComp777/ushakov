<div class="head_space"></div>
<section class="portfolio_inner">

<div class="pItem">
	<h1>@{{ portfolio.name }} <a href="@{{portfolio.url}}" class="btn-open">открыть</a></h1>
	<div class="images">
		<img v-bind:src="portfolio.image" alt="">
	</div>
	@{{{ portfolio.description }}}
</div>

</section>