<html>
<head>
	<title>Base Example - Components Basics</title>
	<script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
	<h2>Base Example of Component</h2>
	<button-counter></button-counter>

	<h2>Reusing Components</h2>
	<button-counter></button-counter>
	<button-counter></button-counter>

</div>
<script type="text/javascript">
	Vue.component('button-counter',{
		data: function(){
			return {
				count: 0
			}
		},
		template: '<button v-on:click="count++">You clicked me {{count}} times. </button>',
	});
	var vm = new Vue({
		el: '#app',
	});
</script>
</body>
</html>