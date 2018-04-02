<html>
<head>
	<title>data Must Be a Function - Components Basics</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
	<h2>data Must Be a Function - Components Basics</h2>
	<p>A component's data option must be a function, so that each instance can maintain an independent copy of the returned data object. To make single count for all buttons use this.</p>
	<button-counter></button-counter>
	<button-counter></button-counter>
	<button-counter></button-counter>

</div>
<script type="text/javascript">
	var buttonCounter2Data = {
		count:0
	}
	Vue.component('button-counter',{
		data: function(){
			return buttonCounter2Data
		},
		template: '<button v-on:click="count++">You clicked me {{count}} times. </button>',
	});
	var vm = new Vue({
		el: '#app',
	});
</script>
</body>
</html>