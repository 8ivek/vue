<html>
<head>
	<title>Component</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
	<ul>
		<todo-item
			v-for="item in groceryList"
			v-bind:todo="item"
		    v-bind:key="item.id">
		</todo-item>
	</ul>
</div>
<script type="text/javascript">
	Vue.component('todo-item',{
		props:['todo'],
		template: '<li>{{ todo.id }}. {{todo.text}}</li>'
	})
	var app = new Vue({
		el:'#app',
		data:{
			groceryList :[
				{id:0,text:'Vegetables'},
				{id:1,text:'Cheese'},
				{id:2,text:'Brocolli'},
			]
		}
	});
</script>
</body>
</html>