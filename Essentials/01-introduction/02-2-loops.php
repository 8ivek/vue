<html>
<head>
	<title>Loops</title>
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