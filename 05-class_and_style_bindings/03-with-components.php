<html>
<head>
	<title>With Components</title>
	<script src="../js/vue.js"></script>
</head>
<body>
<h2>With Components</h2>
<div id="app">
	<p v-bind:class="[activeClass, errorClass]">{{ answer }}</p>
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