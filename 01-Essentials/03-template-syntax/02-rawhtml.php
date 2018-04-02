<html>
<head>
	<title>Raw HTML</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
	<p>Using mustaches: {{ rawHtml }}</p>
	<p>Using v-html directive: <span v-html="rawHtml"></span></p>
</div>
<script type="text/javascript">
	var vm = new Vue({
		el:'#app',
		data:{ rawHtml:'<span style="color:red;">This should be red</span>', },
	});
</script>
</body>
</html>