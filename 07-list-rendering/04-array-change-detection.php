<html>
<head>
	<title>Array Change Detection</title>
	<script src="../js/vue.js"></script>
</head>
<body>
<h2>Array Change Detection</h2>
<h3>Mutation Methods</h3>
<div id="app">

	<button v-on:click="pushme">PUSH</button>
	<button v-on:click="popit">POP</button>
	<button v-on:click="unshift">UNSHIFT</button>


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
				{title: 'ABC title', short_desc: 'Short desc of abc ... '},
				{title: 'DEF title', short_desc: 'Short desc of def ... '},
				{title: 'GHI title', short_desc: 'Short desc of ghi ... '},
			],
			new_ad: {title:'New Ad', short_desc: 'Short desc of new ad...'}
		},
		methods: {
			pushme: function(){
				this.ads.push(this.new_ad)
			},
			unshift: function(){
				this.ads.unshift(this.new_ad)
			},
			popit: function(){
				this.ads.pop();
			}
		}
	});
</script>
</body>
</html>