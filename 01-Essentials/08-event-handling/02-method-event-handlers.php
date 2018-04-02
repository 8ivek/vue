<html>
<head>
	<title>Method event handlers</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">

	<h2>Method event handlers</h2>
	<button v-on:click="greet">Greet</button>

	<h2>Methods in Inline Handlers</h2>
	<button v-on:click="say('Hi')">Say Hi</button>
	<button v-on:click="say('What')">Say What</button>

	<h2>$event variable</h2>
	<button v-on:click="warn('Form cannot be submitted yet.', $event)">Submit</button>
</div>
<script type="text/javascript">
	var vm = new Vue({
		el: '#app',
		data: {
			name: 'Bivek'
		},
		methods: {
			greet: function(event){
				alert('Hello '+this.name+'!');
				if(event){
					alert(event.target.tagName);
				}
			},
			say: function(message){
				alert(message);
			},
			warn: function (message, event) {
				// now we have access to the native event
				if (event) event.preventDefault()
				alert(message);
			}
		}
	})
</script>
</body>
</html>