<html>
<head>
	<title>Instance Lifecycle Hooks</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
	<p>{{ a }}</p>
</div>
<script type="text/javascript">
	// Our data object
	var data = { a: 1};

	// The object is added to a Vue instance
	var vm = new Vue({
		el: '#app',
		data: data,
		created: function() {
			console.log('a is: %s', this.a);
		},
		watch: {
			a: function(val,oldval){
				console.log('value of a changed from %s to %s',oldval,val);
			}
		}
	});
</script>
</body>
</html>