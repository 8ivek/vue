<html>
<head>
	<title>Value Bindings - Form Input Bindings</title>
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