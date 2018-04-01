<html>
<head>
	<title>Passing Data to child components with props - Components Basics</title>
	<script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
	<h2>Passing Data to child components with props - Components Basics</h2>
	<blog-post title="Bijay Joshi"></blog-post>
	<blog-post title="Tara Man Joshi"></blog-post>
	<blog-post title="Bivek Joshi"></blog-post>

	<h2>Array of posts in v-for</h2>
	<blog-post
		v-for="post in posts"
		v-bind:key="post.id"
		v-bind:title="post.title"
	></blog-post>
</div>
<script type="text/javascript">
	Vue.component('blog-post',{
		props: ['title'],
		template: '<p><strong>{{ title }}</strong></p>',
	});
	var vm = new Vue({
		el: '#app',
		data: {
			posts: [
				{id:1,title:'abc'},
				{id:2,title:'def'},
				{id:3,title:'ghi'},
				{id:4,title:'jkl'},
			]
		}
	});
</script>
</body>
</html>