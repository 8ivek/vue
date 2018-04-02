<html>
<head>
	<title>V-show</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
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