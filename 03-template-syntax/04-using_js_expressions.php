<html>
<head>
	<title>Using Javascript Expressions</title>
	<script src="../js/vue.js"></script>
</head>
<body>
<h2>Using Javascript Expressions</h2>
<div id="app">
	<p>{{ ok ? 'YES' : 'NO' }}</p>
	<p>{{ number+1 }}</p>
	<p>{{ message.split('').reverse().join('') }}</p>
	<div v-bind:id="'list-' + id">apple</div>
</div>
<script type="text/javascript">
	var vm = new Vue({
		el:'#app',
		data:{
			ok: true,
			number: 4,
			message: 'Bivek!',
			id: 23,
		},
	});
</script>
</body>
</html>