<html>
<head>
	<title>v-for with an Object</title>
	<script src="../../js/vue.js"></script>
</head>
<body>
<h2>v-for with an Object</h2>
<div id="app">

	<div v-for="ad in adObjects">
		<p>{{ ad }}</p>
	</div>

	<hr />

	<!-- key55 is a variable, can be anything -->
	<div v-for="(ad , key55) in adObjects">
		{{ key55 }}: {{ ad }}
	</div>

	<hr />

	<div v-for="(ad55,key55,index55) in adObjects">
		{{ index55+1 }}. {{key55}}: {{ad55}}
	</div>


</div>
<script type="text/javascript">
	var vm = new Vue({
		el: '#app',
		data: {
			adObjects: {
				firstName: 'John',
				lastName: 'Doe',
				age: 30
			},
		},
	});
</script>
</body>
</html>