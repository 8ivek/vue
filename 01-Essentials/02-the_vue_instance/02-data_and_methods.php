<html>
<head>
	<title>Data and Methods</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
	<p>{{ a }}</p>
	<p>{{ b }}</p>
	<p>{{ c }}</p>
	<button v-on:click="testopo">Multiply</button>
	<button @click="a=0;c=0">Reset</button>
</div>
<script type="text/javascript">
	// Our data object
	var data = { a: 0 ,b: 12, c: 0 };

	//Object.freeze(data);
	// 8iv: if we uncomment above line data variable will no longer update.

	// The object is added to a Vue instance
	var vm = new Vue({
		el: '#app',
		data: data,
		methods: {
			testopo : function(){
				this.a++;
				this.c= this.a * this.b;
			}
		}
	});
	console.log(vm.$data === data);
	console.log(vm.$el === document.getElementById('app'));
	vm.$watch('a', function (newValue, oldValue) {
		// This callback will be called when `vm.a` changes
		console.log('Value of a changed from %s to %s', oldValue, newValue);
	})

	vm.$watch('c', function (newValue, oldValue) {
		// This callback will be called when `vm.a` changes
		console.log('Value of c changed from %s to %s', oldValue, newValue);
	})
</script>
</body>
</html>