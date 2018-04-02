<html>
<head>
	<title>Using Javascript Expressions</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
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