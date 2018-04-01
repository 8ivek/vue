<html>
<head>
	<title>Object Syntax - Binding Inline Styles</title>
	<script src="../../js/vue.js"></script>
</head>
<body>
<h2>Object Syntax - Binding Inline Styles</h2>
<div id="app">
	<div v-bind:style="{ color: activeColor, fontSize: fontSize + 'px' }">Inline Binding</div>
	<div v-bind:style="styleObject">Object Syntax</div>
</div>
<script>
	var vm = new Vue({
		el:'#app',
		data:{
			activeColor: 'red',
			fontSize: 30,
			styleObject: {
				color: 'blue',
				fontSize: '35px'
			}
		},
	});
</script>
</body>
</html>