<html>
<head>
	<title>Conditional Rendering</title>
	<script src="../js/vue.js"></script>
</head>
<body>
<h2>v-if example</h2>
<div id="app">
	<h1 v-if="ok">Yes</h1>
	<h1 v-else>No</h1>

<h2>Conditional groups with v-if on &lt;template&gt;</h2>

	<template v-if="ok">
		<h1>Title</h1>
		<p>Paragraph 1</p>
		<p>Paragraph 2</p>
	</template>

<h2>v-else example</h2>

	<div v-if="ok">
		Now you see me
	</div>
	<div v-else>
		Now you don't
	</div>

<h2>v-else-if example</h2>
	<div v-if="type === 'A'">
		A
	</div>
	<div v-else-if="type === 'B'">
		B
	</div>
	<div v-else-if="type === 'C'">
		C
	</div>
	<div v-else>
		Not A/B/C
	</div>

</div>
<script>
	var vm = new Vue({
		el: '#app',
		data: {
			ok: true,
			type: 'A',
		}
	});
</script>
</body>
</html>