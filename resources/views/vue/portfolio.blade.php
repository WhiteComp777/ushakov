<div class="head_space"></div>

<section class="portfolio_inner">
	<div class="portfolio" >

<article v-for="portfolio in portfolios" >
<div class="square sqr"></div>
<div class="square sql"></div>
		<div class="images">
			<img v-bind:src="portfolio.image" alt="">
		</div>
		<header>
		<a href="#" v-link="{name: 'portfolioItem', params: { PortfolioId: portfolio.id }}">
		<!-- <a href=""></a> -->
		<h3>@{{portfolio.name}}</h3>
		</a>
	</header>
</article>


	</div>
</section>