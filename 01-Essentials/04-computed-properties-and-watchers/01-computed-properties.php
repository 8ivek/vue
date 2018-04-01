<html>
<head>
	<title>Computed Properties</title>
	<script src="../../js/vue.js"></script>
</head>
<body>
<h2>Computed Properties</h2>
<div id="app">
	<!--Complex way-->
	<p>{{ message.split('').reverse().join('') }}</p>

	<!-- Using Basic Example of Computed properties-->
	<p>Original message: "{{ message }}"</p>
	<p>Computed reversed message: "{{ reversedMessage }}"</p>
</div>
<script type="text/javascript">
	var vm = new Vue({
		el:'#app',
		data:{
			message:'Bivek!',
		},
		computed:{
			// a computed getter
			reversedMessage: function(){
				// this points to the vm instance
				return this.message.split('').reverse().join('');
			}
		}
	});
</script>
</body>
</html>