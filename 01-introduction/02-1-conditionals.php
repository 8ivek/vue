<html>
<head>
	<title>Conditionals</title>
	<script src="../js/vue.js"></script>
</head>
<body>
<div id="app">
	<span v-if="seen">Now You See Me!</span>
</div>
<script type="text/javascript">
	var app = new Vue({
		el: '#app',
		data: {
			seen: true,
		},
	})
</script>
</body>
</html>