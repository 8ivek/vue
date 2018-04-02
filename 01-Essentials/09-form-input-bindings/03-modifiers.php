<html>
<head>
	<title>Modifiers - Form Input Bindings</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">

	<h2>Modifiers</h2>

	<h2>Lazy</h2>
	<input v-model.lazy="msg" />
	<p>{{msg}}</p>

	<h2>number (Looks like this is not working.)</h2>
	<input v-model.number="age" />
	<p>{{age}}</p>

	<h2>Trim</h2>
	<input v-model.number="msg" />
	<p>{{msg}}</p>


</div>
<script type="text/javascript">
	var vm = new Vue({
		el: '#app',
		data: {
			msg: '',
			age: '',
		},
	})
</script>
</body>
</html>