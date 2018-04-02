<html>
<head>
	<title>Loops</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
	<ul>
		<li v-for="todo in todos">
			<a v-bind:href="todo.link" target="_blank">{{ todo.text }}</a>
		</li>
	</ul>
</div>
<script type="text/javascript">
	var app = new Vue({
		el: '#app',
		data: {
			todos:[
				{text:'Bivek Joshi',link:'http://bivek.ca'},
				{text:'Facebook',link:'http://fb.com'},
				{text:'Instagram',link:'http://instagram.com'},
				{text:'Helpaid',link:'https://www.helpaid.ca'},
			],
		},
	})
</script>
</body>
</html>