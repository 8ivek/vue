<html>
<head>
	<title>Key Modifiers</title>
	<script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">

	<h2>Key Modifiers</h2>
	<p>When listening for keyboard events, we often need to check for common key codes. Vue also allows adding key modifiers for v-on when listening for key events:</p>
	<input v-on:keyup.13="enterKeyPressed"><br /><br />
	<input v-on:keyup.enter="enterKeyPressed"><br /><br />
	<input v-on:keyup.enter="enterKeyPressed"><br /><br />
	<input v-on:keyup.esc="escKeyPressed"><br /><br />
	<input v-on:keyup.space="spaceKeyPressed"><br /><br />
	<input v-on:keyup.delete="deleteKeyPressed"><br /><br />
	<input v-on:keyup.f2="f1KeyPressed"><br /><br />

</div>
<script type="text/javascript">
	var vm = new Vue({
		el: '#app',
		data: {
			name: 'Bivek'
		},
		methods: {
			enterKeyPressed: function(){
				alert('Enter key pressed!');
			},
			escKeyPressed: function(){
				alert('Enter esc pressed!');
			},
			spaceKeyPressed: function(){
				alert('Enter space pressed!');
			},
			deleteKeyPressed: function(){
				alert('Enter delete pressed!');
			},
			f1KeyPressed: function(){
				alert('Enter f2 pressed!');
			}
		}
	})
	Vue.config.keyCodes.f2 = 113
</script>
</body>
</html>