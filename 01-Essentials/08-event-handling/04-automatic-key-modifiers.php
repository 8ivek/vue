<html>
<head>
	<title>Automatic Key Modifiers</title>
	<script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">

	<h2>Automatic Key Modifiers</h2>

	<input @keyup.page-down="say('Page down')" placeholder="Page down"><br /><br />
	<input @keyup.arrow-down="say('Arrow down')" placeholder="Arrow down"><br /><br />

	<h2>System Modifiers Keys</h2>

	<p>Note that modifier keys are different from regular keys and when used with keyup events, they have to be pressed when the event is emitted. In other words, keyup.ctrl will only trigger if you release a key while holding down ctrl. It won’t trigger if you release the ctrl key alone. If you do want such behaviour, use the keyCode for ctrl instead: keyup.17.</p>

	<input @keyup.ctrl="say('Ctrl')" placeholder="Ctrl"><br /><br />
	<input @keyup.alt="say('Alt')" placeholder="Alt"><br /><br />
	<input @keyup.shift="say('Shift')" placeholder="Shift"><br /><br />
	<input @keyup.meta="say('Meta')" placeholder="Meta (On Macintosh keyboards, meta is the command key (⌘). On Windows keyboards, meta is the windows key (⊞))"><br /><br />

	<h2>Key Combinations</h2>
	<input @keyup.alt.67="say('Alt+C')" placeholder="ALT+C"><br /><br />
	<div @click.ctrl="say('Ctrl + Click')" placeholder="Ctrl + Click">Press Ctrl + Click</div><br /><br />

	<h2>.exact Modifier</h2>
	<!-- this will fire even if Alt or Shift is also pressed -->
	<p><button @click.ctrl="say('ctrl')">CTRL no exact</button></p>

	<!-- this will only fire when Ctrl and no other keys are pressed -->
	<p><button @click.ctrl.exact="say('ctrl exact')">ctrl exact</button></p>

	<!-- this will only fire when no system modifiers are pressed -->
	<p><button @click.exact="say('exact')">Exact</button></p>

	<h2>Mouse Button Modifiers</h2>
	<p><button @click.right="say('right mouse button')">Right Mouse</button></p>
	<p><button @click.left="say('left mouse button')">Left Mouse</button></p>
	<p><button @click.middle="say('middle mouse button')">Middle Mouse</button></p>

</div>
<script type="text/javascript">
	var vm = new Vue({
		el: '#app',
		data: {
			name: 'Bivek'
		},
		methods: {
			say: function(message){
				alert(message+' pressed!');
			},
		}
	})
	Vue.config.keyCodes.f2 = 113
</script>
</body>
</html>