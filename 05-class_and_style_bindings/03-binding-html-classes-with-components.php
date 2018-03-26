<html>
<head>
	<title>With Components</title>
	<script src="../js/vue.js"></script>
</head>
<body>
<h2>With Components</h2>
<div>Come back after finishing with components</div>
<my-component class="baz boo">My Component</my-component>
<script type="text/javascript">
	Vue.component('my-component',{
		template: '<p class="foo bar">hi</p>'
	})
</script>
</body>
</html>