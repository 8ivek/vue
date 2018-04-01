<html>
<head>
	<title>Controlling Reusable Elements with key</title>
	<script src="../../js/vue.js"></script>
</head>
<body>
<h2>Controlling Reusable Elements with key</h2>
<div id="app">
	<div>
		<template v-if="loginType === 'username'">
			<label>Username</label>
			<input placeholder="Enter your username">
		</template>
		<template v-else>
			<label>Email</label>
			<input placeholder="Enter your email address">
		</template>
	</div>
	<button v-on:click="apple">Toggle</button>

	<div>
		<template v-if="loginType === 'username'">
			<label>Username</label>
			<input placeholder="Enter your username" key="username-input">
		</template>
		<template v-else>
			<label>Email</label>
			<input placeholder="Enter your email address" key="email-input">
		</template>
	</div>
</div>
<script>
	var vm = new Vue({
		el: '#app',
		data: {
			loginType: 'username',
		},
		methods:{
			apple: function(){
				this.loginType = (this.loginType==='username')?'':'username';
			}
		},
	});
</script>
</body>
</html>