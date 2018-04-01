<html>
<head>
	<title>Computed Caching vs Methods</title>
	<script src="../../js/vue.js"></script>
</head>
<body>
<h2>Computed Caching vs Methods</h2>
<div id="app">
	<p>Reversed message: "{{ reversedMessage() }}"</p>
	<p>Reversed message: "{{ reversedMessage2 }}"</p>
	<p>Now {{now() }}</p>
	<p>Now {{now2 }}</p>
</div>
<script type="text/javascript">
	var vm = new Vue({
		el:'#app',
		data:{
			message:'Bivek!',
		},
		methods: {
			reversedMessage: function(){
				return this.message.split('').reverse().join('');
			},
			now: function(){
				return Date.now();
			}
		},
		computed:{
			// a computed getter
			reversedMessage2: function(){
				// this points to the vm instance
				return this.message.split('').reverse().join('');
			},
			now2: function () {
				return Date.now()
			}
		}
	});
</script>
</body>
</html>