<html>
<head>
	<title>Loops</title>
	<script src="../js/vue.js"></script>
</head>
<body>
<div id="app">
	<ul>
		<li v-for="todo in todos">
			<a v-bind:href="todo.link">{{ todo.text }}</a>
		</li>
	</ul>
</div>
<script type="text/javascript">
	var app = new Vue({
		el: '#app',
		data: {
			todos:[
				{text:'Learn JS',link:'http://bivek.ca'},
				{text:'Learn Vue',link:'http://fb.com'},
				{text:'Build something awesome',link:'http://ig.com'},
			],
		},
	})
</script>
</body>
</html>