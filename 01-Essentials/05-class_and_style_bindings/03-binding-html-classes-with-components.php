<html>
<head>
	<title>With Components</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
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