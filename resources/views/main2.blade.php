<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,400italic,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/icons.css" />
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.5.0/css/font-awesome.min.css" />

	<title>Ushakov Ilya</title>
</head>
<body>

<div class="body_inner" v-bind:class="{'openCall': call}">
@include('navination')	


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
@include('blog')
</template>

<template id="postTPL">
@include('post')
</template>

<template id="aboutTPL">
@include('about')
</template>


<div class="call">
<div class="call_close" @click="call=false">x</div>
<div class="call_inner">
	<h1>Напиши мне</h1>
	<h2>Что-нибудь доброе</h2>
	<form action="">
		<label for="">Господин, представьтесь</label>
		<input type="text" name="name" value="" placeholder="Лорд Волан-де-Мо́рт">

		<label for="">И пишете здесь</label>
		<textarea name="" id="" placeholder="Где Гарри?"></textarea>
		<button>Отправить</button>
	</form>
</div>
</div>
<template id="contactsTPL"> @include("contacts") </template>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.25/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-router/0.7.13/vue-router.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.8.0/vue-resource.js"></script>

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
<!-- <script src="js/jquery-2.2.4.min.js"></script> -->
<!-- <script src="js/script.js"></script> -->
</body>
</html>
