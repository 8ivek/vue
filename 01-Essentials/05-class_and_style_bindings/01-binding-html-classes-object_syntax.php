<html>
<head>
	<title>Object Syntax</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<h2>Object Syntax</h2>
<div id="app">
	<p class="static" v-bind:class="{active:isActive, 'text-danger':hasError}">{{ answer }}</p>
	<p v-bind:class="appleObject2">{{ answer2 }}</p>
	<p v-bind:class="classObject">{{ answer2 }}</p>
</div>
<script>
	var vm = new Vue({
		el:'#app',
		data:{
			isActive: true,
			answer: 'Thrifty Thursday',
			answer2: 'Favorite Friday',
			hasError: true,
			error: false,
			appleObject2: {
				active: true,
				'text-danger': true,// use quote sign if you want to use - (hyphen).
				tru_eth: true,// we don't need quote if we use underscore.
			}
		},
		computed: {
			classObject: function(){
				return {
					active: this.isActive && !this.error,
					'text-danger': this.error || this.hasError,
				}
			}
		}
	});
</script>
</body>
</html>