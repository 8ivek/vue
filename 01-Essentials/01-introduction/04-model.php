<html>
<head>
	<title>Model</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
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