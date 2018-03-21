<html>
<head>
	<title>Instance Lifecycle Hooks</title>
	<script src="../js/vue.js"></script>
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