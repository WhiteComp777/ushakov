<nav class="menu menu--prospero">
		<ul class="menu__list">
		<li class="menu__item" v-bind:class="{ 'menu__item--current' :  $route.name=='main'}">
				<a href="#" v-link="{ name: 'main' }" class="menu__link ">В начало</a>
		</li>

			<li class="menu__item" v-bind:class="{ 'menu__item--current' :  $route.name=='about'}">
				<a href="#" v-link="{ name: 'about' }" class="menu__link">Что я</a>
			</li>
			<li class="menu__item " v-bind:class="{ 'menu__item--current' :  $route.name=='blog' || $route.name=='post'  }">
				<a href="#"  v-link="{ name: 'blog' }" class="menu__link">Мысли</a>
			</li>
			<li class="menu__item " v-bind:class="{ 'menu__item--current' :  $route.name=='portfolio'}">
				<a href="#" v-link="{name: 'portfolio'}" class="menu__link">Ценность</a>
			</li>
			<li class="menu__item " v-bind:class="{ 'menu__item--current' :  $route.name=='hell'}">
				<a href="#" v-link="{ name: 'hell'}" class="menu__link">Ад</a>
			</li>
			<li class="menu__item " v-bind:class="{ 'menu__item--current' :  $route.name=='contacts'}">
				<a href="#"  v-link="{name: 'contacts' }" class="menu__link">Связь</a>
			</li>
		</ul>
		
	</nav>