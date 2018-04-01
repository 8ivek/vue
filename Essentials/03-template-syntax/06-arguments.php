<html>
<head>
	<title>Arguments</title>
	<script src="../../js/vue.js"></script>
</head>
<body>
<h2>Arguments</h2>
<div id="app">
	<p><a v-bind:href="hyperlink" target="_blank">Helpaid</a></p>
	<p><a v-bind:href="hyperlink" target="_blank" v-on:click="doSomething">Click Here</a></p>
</div>
<script type="text/javascript">
	var vm = new Vue({
		el:'#app',
		data:{
			hyperlink:'https://www.helpaid.ca',
		},
		methods:{
			doSomething : function(){
				alert('Thanks for clicking!');
			}
		}
	});
</script>
</body>
</html>