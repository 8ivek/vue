<html>
<head>
	<title>Value Bindings - Form Input Bindings</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">

	<h2>Value Bindings (v-bind)</h2>

	<h2>Checkbox</h2>
	<input type="checkbox" v-model="toggle" true-value="yes" false-value="no" />

	<p>{{ toggle }}</p>

	<h2>Select Options</h2>
	<select v-model="selected">
		<!-- inline object literal -->
		<option v-bind:value="{ number: 123 }">123</option>
	</select>


</div>
<script type="text/javascript">
	var vm = new Vue({
		el: '#app',
		data: {
			toggle: 'yes',
			selected : '',
		},
	})
</script>
</body>
</html>