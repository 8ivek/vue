<html>
<head>
	<title>Computed vs Watched Property</title>
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