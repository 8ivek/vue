<html>
<head>
	<title>Directives</title>
	<script src="../../js/vue.js"></script>
</head>
<body>
<h2>Directives</h2>
<div id="app">
	<p v-if="seen">{{ message.split('').reverse().join('') }}</p>
</div>
<script type="text/javascript">
	var vm = new Vue({
		el:'#app',
		data:{
			seen: true, // if seen is false <p> tag will be removed from DOM, which works on-fly. By on-fly i mean when we change the value of seen from console or by any means the <p> tag will be added or removed from the DOM.
			message: 'Bivek!',
		},
	});
</script>
</body>
</html>