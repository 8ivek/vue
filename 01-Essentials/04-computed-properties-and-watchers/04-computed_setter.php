<html>
<head>
	<title>Computed Setter</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<h2>Computed Setter</h2>
<div id="app">
	<p>Computed Property: {{ fullName }}</p>
</div>
<script type="text/javascript">
	var vm = new Vue({
		el:'#app',
		data:{
			firstName: 'Foo',
			lastName: 'Bar',
		},
		computed: {
			fullName: {
				// getter
				get: function () {
					return this.firstName + ' ' + this.lastName
				},
				// setter
				set: function (newValue) {
					var names = newValue.split(' ')
					this.firstName = names[0]
					this.lastName = names[names.length - 1]
				}
			}
		},
	});
</script>
</body>
</html>