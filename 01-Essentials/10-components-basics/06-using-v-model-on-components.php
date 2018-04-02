<html>
<head>
	<title>Using v-model on Components - Components Basics</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
	<h2>Using v-model on Components - Components Basics</h2>

	<online-order
            v-bind:value="searchText"
            v-on:input="searchText=$event"
            ></online-order>
    {{searchText}}

</div>
<script type="text/javascript">
	Vue.component('online-order',{
		props: ['value'],
		template: `<input v-bind:value="value" v-on:input="$emit('input',$event.target.value)" />`,
	});
	var vm = new Vue({
		el: '#app',
		data: {
            searchText: '',
		},
	});
</script>
</body>
</html>