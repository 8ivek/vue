<html>
<head>
	<title>Object Change detection Caveats</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<h2>Object Change Detection Caveats</h2>
<div id="app">

	<p><input type="button" v-on:click="objectchange" value="Add Bird" /></p>

	<p><input type="button" v-on:click="objassign" value="Add Multiple" /></p>

	<p><input type="button" v-on:click="resetObject" value="Reset" /></p>

	<div v-for="(ad,index) in userProfile">
		{{ index }}: {{ ad }}
	</div>

</div>
<script type="text/javascript">
	var vm = new Vue({
		el: '#app',
		data: {
			userProfile: {
				FirstName: 'Bivek',
				LastName: 'Joshi',
				Address: '468 Welli',
			}
		},
		methods:{
			objectchange: function(){
				Vue.set(this.userProfile,'Bird','The Eagle');
			},
			objassign: function(){
				this.userProfile = Object.assign({}, this.userProfile, {
					Age: 27,
					FavoriteColor: 'FB Blue',
				})
			},
			resetObject: function(){
				this.userProfile={
					FirstName: 'Bivek',
					LastName: 'Joshi',
					Address: '468 Welli',
				};
			}
		},
	});
</script>
</body>
</html>