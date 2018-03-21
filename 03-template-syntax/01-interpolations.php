<html>
<head>
	<title>Interpolations</title>
	<script src="../js/vue.js"></script>
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