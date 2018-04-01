<html>
<head>
	<title>Declarative Rendering - vue</title>
	<script src="../../js/vue.js"></script>
</head>
<body>
	<div id="app">
		<input type="text" v-bind:value="message" v-on:input="changeTitle" value="" />
		<p>{{ message }}</p>
	</div>
	<script type="text/javascript">
		var app = new Vue({
			el: '#app',
			data: {
				message: 'Hello Vue!'
			},
			methods: {
				changeTitle: function(event){
					this.message = event.target.value;
				}
			}
		})
	</script>
</body>
</html>