<html>
<head>
	<title>Base Example - Components Basics</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
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