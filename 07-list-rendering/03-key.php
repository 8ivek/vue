<html>
<head>
	<title>Key</title>
	<script src="../js/vue.js"></script>
</head>
<body>
<h2>Key</h2>
<p>To give Vue a hint so that it can track each node’s identity, and thus reuse and reorder existing elements, you need to provide a unique key attribute for each item. An ideal value for key would be the unique id of each item. </p>
<p>It is recommended to provide a key with v-for whenever possible, unless the iterated DOM content is simple, or you are intentionally relying on the default behavior for performance gains.</p>
<div id="app">

	<div v-for="ad in ads" :key="ad.id">
		<h2>{{ ad.title }}</h2>
		<p>{{ad.short_desc}}</p>
	</div>

</div>
<script type="text/javascript">
	var vm = new Vue({
		el: '#app',
		data: {
			ads: [
				{id:0,title: 'ABC title', short_desc: 'Short desc of abc ... '},
				{id:1,title: 'DEF title', short_desc: 'Short desc of def ... '},
				{id:2,title: 'GHI title', short_desc: 'Short desc of ghi ... '},
			],
		},
	});
</script>
</body>
</html>