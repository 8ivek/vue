<html>
<head>
	<title>Creating a Vue Instance</title>
	<script src="../js/vue.js"></script>
</head>
<body>
<div id="app">

</div>
<script type="text/javascript">
	var vm = new Vue({
		// options
	});
	// Every Vue application starts by creating a new Vue instance with the Vue function
	//here vm = root vue instance
	// vm is short for VueModel although vuejs don't follow MVVM pattern but partly inspired by it.
	// for now just know that "All Vue components are also vue instances". We will talk about vue components later
	// Therefore vue components also accept the sam options object (except for a few root-specific options).
</script>
</body>
</html>