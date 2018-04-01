<html>
<head>
	<title>A Single Root Element - Components Basics</title>
	<script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
	<h2>A Single Root Element</h2>
	<blog-post
		v-for="post in posts"
		v-bind:key="post.id"
		v-bind:title="post.title"
		v-bind:content="post.content"
	></blog-post>
</div>
<script type="text/javascript">
	Vue.component('blog-post',{
		props: ['title','content'],
		template: '<div><strong>{{ title }}</strong>' +
		'<p v-html="content"></p></div>',
	});
	var vm = new Vue({
		el: '#app',
		data: {
			posts: [
				{id:1, title:'abc',content: '<span style="color:red;">abc</span> sdlkf sdlkfsd lfksdf...'},
				{id:2, title:'def',content: '<span style="color:red;">def</span> sdlkf sdlkfsd lfksdf...'},
				{id:3, title:'ghi',content: '<span style="color:red;">ghi</span> sdlkf sdlkfsd lfksdf...'},
				{id:4, title:'jkl',content: '<span style="color:red;">jkl</span> sdlkf sdlkfsd lfksdf...'},
			]
		}
	});
</script>
</body>
</html>