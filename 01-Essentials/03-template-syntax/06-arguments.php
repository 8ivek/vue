<html>
<head>
	<title>Arguments</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
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