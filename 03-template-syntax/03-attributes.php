<html>
<head>
	<title>Attributes</title>
	<script src="../js/vue.js"></script>
</head>
<body>
<div id="app">
	<div v-bind:id="dynamicId">Inspect and see attributes</div>
	<button v-bind:disabled="isButtonDisabled">Attribute can be true or false</button>
</div>
<script type="text/javascript">
	var vm = new Vue({
		el:'#app',
		data:{ dynamicId: 'yoDivKoIdHo',isButtonDisabled: true, },
	});
</script>
</body>
</html>