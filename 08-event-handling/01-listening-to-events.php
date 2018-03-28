<html>
<head>
	<title>Listening to Events</title>
	<script src="../js/vue.js"></script>
</head>
<body>
<div id="app">

	<h2>Listening to Events</h2>
	<button v-on:click="counter += 1">Add 1</button>
	<p>The button above has been clicked {{ counter }} times.</p>
</div>
<script type="text/javascript">
	var vm = new Vue({
		el: '#app',
		data: {
			counter: 0
		}
	})
</script>
</body>
</html>