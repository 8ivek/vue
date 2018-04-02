<html>
<head>
	<title>Computed vs Watched Property</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<h2>Computed vs Watched Property</h2>
<div id="app">
	<p>Watched Property: {{ fullName }}</p>
	<p>Computed Property: {{ fullName2 }}</p>
</div>
<script type="text/javascript">
	var vm = new Vue({
		el:'#app',
		data:{
			firstName: 'Foo',
			lastName: 'Bar',
			fullName: 'Foo Bar',
		},
		watch: {
			firstName: function (val) {
				this.fullName = val + ' ' + this.lastName
			},
			lastName: function (val) {
				this.fullName = this.firstName + ' ' + val
			}
		},
		computed: {
			fullName2: function () {
				return this.firstName + ' ' + this.lastName
			}
		},
	});
</script>
</body>
</html>