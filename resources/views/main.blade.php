<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width" id="mediaWidth">

	<link rel="stylesheet" href="css/nprogress.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,400italic,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/icons.css" />
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.5.0/css/font-awesome.min.css" />

	<title>Ushakov Ilya</title>
</head>
<body>

<div class="body_inner" v-bind:class="">
@include('vue.navination')	


  <router-view></router-view>


<template id="mainTPL">
	<div class="header" id="header">
	<canvas id="demo-canvas"></canvas>
	<div class="inner-center">
		<h1>Ушаков Илья</h1>
		 <p><a href="">И за май я заработал 12.300</a></p>
	</div>
	</div>

</template>


<template id="blogTPL">
@include('vue.blog')
</template>

<template id="postTPL">
@include('vue.post')
</template>

<template id="aboutTPL">
@include('vue.about')
</template>

<template id="hellTPL">
@include('vue.hell')
</template>

<template id="portfolioTPL">
@include('vue.portfolio')
</template>

<template id="portfolioItemTPL">
@include('vue.portfolioItem')
</template>


{{-- @include('vue.call') --}}

<template id="contactsTPL"> @include("vue.contacts") </template>

<script>
if(window.innerWidth<500){
viewport = document.querySelector("meta[name=viewport]");
viewport.setAttribute('content', 'width=500');
}
// document.getElementById("mediaWidth");
	
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.25/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-router/0.7.13/vue-router.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.8.0/vue-resource.js"></script>
<!-- progress -->
<script src="js/nprogress.js"></script>

<!-- univerce -->
		<script src="js/TweenLite.min.js"></script>
		<script src="js/EasePack.min.js"></script>
		<script src="js/universe.js"></script>

<!-- //unicorn -->
<script src="js/mo.min.js"></script>
<script src="js/unicorn.js"></script>

<!-- main vue -->
<script src="js/app.js"></script>



 </div> <!-- body inner-->

<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter38159645 = new Ya.Metrika({ id:38159645, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/38159645" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

</body>
</html>
