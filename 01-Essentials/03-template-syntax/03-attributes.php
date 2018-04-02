<html>
<head>
	<title>Attributes</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
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