<html>
<head>
	<title>Displaying Filtered/Sorted Results</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<h2>Displaying Filtered/Sorted Results</h2>
<div id="app">

	<p v-for="n in evenNumbers">{{ n }}</p>

	<hr />

	<p>If you can't use computed properties you can use methods</p>

	<p v-for="n in even()">{{ n }}</p>

	<hr />

	<h2>v-for with a Range</h2>
	<div>
		<span v-for="n in 10">{{ n }}</span>
	</div>

</div>
<script type="text/javascript">
	var vm = new Vue({
		el: '#app',
		data: {
			numbers: [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
		},
		computed:{
			evenNumbers: function(){
				return this.numbers.filter(function(number) {
					console.log(number);
					return number % 2 === 0
				}
				)
			},
		},
		methods:{
			even: function(){
				return this.numbers.filter(function (number){
					return number % 2 === 0
				})
			}
		}
	});
</script>
</body>
</html>