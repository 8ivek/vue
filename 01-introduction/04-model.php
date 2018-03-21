<html>
<head>
	<title>Model</title>
	<script src="../js/vue.js"></script>
</head>
<body>
<div id="app">
	<p>{{ message }}</p>
	<input v-model="message" />
</div>
<script type="text/javascript">
	var app = new Vue({
		el: '#app',
		data: {
			message:'Hello World!',
		},
	})
</script>
</body>
</html>