<html>
<head>
	<title>Directives</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
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