<html>
<head>
	<title>Using v-model on Components - Components Basics</title>
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