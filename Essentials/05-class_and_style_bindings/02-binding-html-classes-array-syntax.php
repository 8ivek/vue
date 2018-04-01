<html>
<head>
	<title>Array Syntax</title>
	<script src="../../js/vue.js"></script>
</head>
<body>
<h2>Array Syntax</h2>
<div id="app">
	<p v-bind:class="[activeClass, errorClass]">{{ answer }}</p>
	<p v-bind:class="[isActive ? activeClass : '', errorClass]">{{ answer }}</p>
	<p v-bind:class="[{active22 : isActive}, errorClass]">{{ answer }}</p>
</div>
<script>
	var vm = new Vue({
		el:'#app',
		data: {
			answer: 'Thrifty Thursday',
			isActive: true,
			activeClass: 'active',
			errorClass: 'text-danger'
		},
	});
</script>
</body>
</html>