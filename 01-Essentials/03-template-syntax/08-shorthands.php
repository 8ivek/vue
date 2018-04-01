<html>
<head>
	<title>Shorthands</title>
	<script src="../../js/vue.js"></script>
</head>
<body>
<h2>Shorthands</h2>
<div id="app">
	<p>Vuejs provides special shorthands for two of the most commonly used directives, v-bind and v-on.</p>
	full syntax
	<p><a v-bind:href="url" target="_blank">URL</a></p>
	shorthand:
	<p><a :href="url" target="_blank">URL</a></p>

	full syntax
	<p><a v-on:click="doSomething">URL</a></p>
	shorthand:
	<p><a @click="doSomething">URL</a></p>

</div>
<script type="text/javascript">
	var vm = new Vue({
		el:'#app',
		data:{
			url:'https://www.helpaid.ca',
		},
		methods:{
			doSomething : function(){
				alert('Thanks for clicking!');
				document.location='https://www.helpaid.ca';
			}
		}
	});
</script>
</body>
</html>