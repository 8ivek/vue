<html>
<head>
	<title>User Input</title>
	<script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
	<input type="text" v-on:input="changeMessage" v-bind:value="message" value="" />
	<p>{{message}}</p>
	<p>{{revmessage}}</p>
	<button v-on:click="reverseMessage">Reverse</button>
</div>
<script type="text/javascript">
	var app = new Vue({
		el: '#app',
		data: {
			message:'Hello Vuejs!',
			revmessage: '!sjeuV olleH',
		},
		methods: {
			reverseMessage:function(){
				this.revmessage = this.message;
				this.message = this.message.split('').reverse().join('');
			},
			changeMessage:function(event){
				this.message = event.target.value;
				this.revmessage = this.message.split('').reverse().join('');

			}
		}
	})
</script>
</body>
</html>