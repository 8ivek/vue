<html>
<head>
	<title>List Rendering</title>
	<script src="../js/vue.js"></script>
</head>
<body>
<div id="app">

	<h2>v-for on a &lt;template&gt;</h2>

	<ul>
		<template v-for="item in items">
			<li>{{ item.msg }}</li>
		</template>
	</ul>

	<h2>v-for with v-if</h2>

	<li v-for="todo in todos" v-if="!todo.isComplete">
		{{ todo.msg }}
	</li>

	<h2>Conditionally skip execution of v-for</h2>

	<ul v-if="todos.length">
		<li v-for="todo in todos">
			{{ todo.msg }}
		</li>
	</ul>

</div>
<script type="text/javascript">
	var vm = new Vue({
		el: '#app',
		data: {
			items: [
				{msg:'first'},
				{msg:'second'},
				{msg:'third'},
				{msg:'fourth'},
			],
			todos: [
				{msg:'first todo',isComplete: false},
				{msg:'second todo',isComplete: true},
				{msg:'third todo',isComplete: false},
				{msg:'fourth todo',isComplete: true},
			],
		},
	});
</script>
</body>
</html>