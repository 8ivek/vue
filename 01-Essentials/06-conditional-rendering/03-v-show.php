<html>
<head>
	<title>V-show</title>
	<script src="../../js/vue.js"></script>
</head>
<body>
<h2>V-show</h2>
<div id="app">
	<button v-on:click="apple">Toggle</button>
	<h1 v-show="ok">Hello!</h1>
</div>
<script>
	var vm = new Vue({
		el: '#app',
		data: {
			ok: true,
		},
		methods:{
			apple: function(){
				this.ok = (this.ok === true)?false:true;
			}
		},
	});
</script>
</body>
</html>