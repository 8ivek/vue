<html>
<head>
	<title>User Input</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
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