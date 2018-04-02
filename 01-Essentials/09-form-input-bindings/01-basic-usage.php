<html>
<head>
	<title>Basic usages - Form Input Bindings</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">

	<h1>Basic usages - Form Input Bindings</h1>

	<h2>Text</h2>

	<input v-model="yourname" placeholder="Your name here!" />
	<p>Your name is: {{ yourname }}</p>

	<h2>Multiline text</h2>

	<textarea cols="45" rows="7" v-model="message" placeholder="add multiple lines"></textarea>
	<br />
	<span>Multiline message is:</span>
	<p style="white-space: pre-line;">{{ message }}</p>

	<h2>Checkbox</h2>
	<input type="checkbox" id="checkbox123" v-model="checked">
	<label for="checkbox123">{{ checked }}</label>

	<h2>Multiple checkboxes bound to the same array:</h2>

	<input type="checkbox" id="bivek123" value="Bivek Joshi" v-model="checkedNames">
	<label for="bivek123">Bivek</label>
	<input type="checkbox" id="bijay123" value="Bijay Joshi" v-model="checkedNames">
	<label for="bijay123">Bijay</label>
	<input type="checkbox" id="taraman123" value="Tara Man Joshi" v-model="checkedNames">
	<label for="taraman123">Tara Man</label>
	<br>
	<span>Checked names: {{ checkedNames }}</span>

	<h2>Radio</h2>
	<input type="radio" id="first123" value="First" v-model="picked" />
	<label for="first123">First</label>
	<br />
	<input type="radio" id="second123" value="Second" v-model="picked" />
	<label for="second123">Second</label><br />
	<span>Picked: {{ picked }}</span>

	<h2>Select</h2>

	<select v-model="selected">
		<option disabled value="">Please select one</option>
		<option>Bivek</option>
		<option>Bijay</option>
		<option>Tara Man</option>
	</select>
	<span>Selected: {{ selected }}</span>

	<h2>Multiple Select (Bound to array)</h2>
	<select v-model="selected_array" multiple>
		<option>Bivek</option>
		<option>Bijay</option>
		<option>Tara Man</option>
	</select>
	<br>
	<span>Selected: {{ selected_array }}</span>

	<h2>Dynamic options rendered with v-for</h2>
	<select v-model="dynamic_selected">
		<option v-for="option in dynamic_options" v-bind:value="option.value">
			{{ option.text }}
		</option>
	</select>
	<span>Selected: {{ dynamic_selected }}</span>

</div>
<script type="text/javascript">
	var vm = new Vue({
		el: '#app',
		data: {
			yourname: '',
			message: '',
			checked: false,
			checkedNames: [],
			picked: 'First',
			selected: '',
			selected_array:[],
			dynamic_selected: 'biv',
			dynamic_options: [
				{text: 'Tara Man Joshi', value: 'tmj'},
				{text: 'Bivek Joshi', value: 'biv'},
				{text: 'Bijay Joshi', value: 'bij'},

			],
		},
	})
</script>
</body>
</html>