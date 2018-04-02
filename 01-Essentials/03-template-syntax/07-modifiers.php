<html>
<head>
	<title>Modifiers</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<h2>Modifiers</h2>
<div id="app">
	<form v-on:submit.prevent="onSubmit" method="get" v-bind:action="action" target="_blank">
		<input type="text" name="ss" />
		<input type="submit" value="Search" />
	</form>
</div>
<script type="text/javascript">
	var vm = new Vue({
		el:'#app',
		data:{
			action:'https://www.helpaid.ca/search',
		},
		methods:{
			onSubmit : function(){
				alert('Thanks for submitting! Nothing will happen because of v-on:submit.prevent modifier.');
			}
		}
	});
</script>
</body>
</html>