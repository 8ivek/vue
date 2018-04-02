<html>
<head>
	<title>List Rendering</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">

	<p>Need to revisit this again, after I am done with vue components.</p>

	<h2>Todo List Example</h2>

	<input
		v-model="newTodoText"
		v-on:keyup.enter="addNewTodo"
		placeholder="Add a todo"
	>

	<ul>
		<li
			is="todo-item"
			v-for="(todo, index) in todos"
			v-bind:key="todo.id"
			v-bind:title="todo.title"
			v-on:remove="todos.splice(index, 1)"
		></li>
	</ul>

</div>
<script type="text/javascript">
	Vue.component('todo-item', {
		template: '\
    <li>\
      {{ title }}\
      <button v-on:click="$emit(\'remove\')">X</button>\
    </li>\
  ',
		props: ['title']
	})

	new Vue({
		el: '#app',
		data: {
			newTodoText: '',
			todos: [
				{
					id: 1,
					title: 'Do the dishes',
				},
				{
					id: 2,
					title: 'Take out the trash',
				},
				{
					id: 3,
					title: 'Mow the lawn'
				}
			],
			nextTodoId: 4
		},
		methods: {
			addNewTodo: function () {
				this.todos.push({
					id: this.nextTodoId++,
					title: this.newTodoText
				})
				this.newTodoText = ''
			}
		}
	})
</script>
</body>
</html>