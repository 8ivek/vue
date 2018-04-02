<html>
<head>
	<title>Interpolations</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
	<p v-once>This will never change: {{ msg }}</p>
	<p>This changes: {{ msg }}</p>
	<button v-on:click="changeMessage">Change message</button>
</div>
<script type="text/javascript">
	var vm = new Vue({
		el:'#app',
		data:{ msg:'Good Morning' },
		methods: {
			changeMessage: function(){
				this.msg='Good Afternoon';
			}
		},
	});
</script>
</body>
</html>