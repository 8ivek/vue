<html>
<head>
	<title>Raw HTML</title>
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