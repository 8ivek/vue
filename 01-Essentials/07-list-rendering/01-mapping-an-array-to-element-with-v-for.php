<html>
<head>
	<title>Mapping an Array to Elements with v-for</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<h2>Mapping an Array to Elements with v-for</h2>
<div id="app">

	<div v-for="ad in ads">
		<h2>{{ ad.title}}</h2>
		<p>{{ ad.short_desc }}</p>
	</div>

	<hr />

	<div v-for="(ad,index) in ads">
		<h2>#{{ index+1 }} {{ ad.title}}</h2>
		<p>{{ ad.short_desc }}</p>
	</div>

	<hr />
	<p>You can also use of as the delimiter instead of in, so that it is closer to JavaScript’s syntax for iterators:</p>

	<div v-for="(ad,index) of ads">
		<h2>#{{ index+1 }} {{ ad.title}}</h2>
		<p>{{ ad.short_desc }}</p>
	</div>
</div>
<script type="text/javascript">
	var vm = new Vue({
		el: '#app',
		data: {
			ads: [
				{title: 'ABC title', short_desc: 'Short desc of abc ... '},
				{title: 'DEF title', short_desc: 'Short desc of def ... '},
			],
		},
	});
</script>
</body>
</html>