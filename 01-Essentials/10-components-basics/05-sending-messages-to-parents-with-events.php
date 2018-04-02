<html>
<head>
	<title>Sending Messages to Parents with Events - Components Basics</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
	<h2>Sending Messages to Parents with Events - Components Basics</h2>
	<h2>Emitting a Value With an Event</h2>

	<!--v-on:enlarge-text="postFontSize += $event"-->

	<div :style="{ fontSize: postFontSize + 'em' }">
		<blog-post
			v-for="post in posts"
			v-bind:key="post.id"
			v-bind:title="post.title"
			v-bind:content="post.content"
			v-on:enlarge-text="onEnlargeText"
		></blog-post>
	</div>
</div>
<script type="text/javascript">
	Vue.component('blog-post',{
		props: ['title','content'],
		template: '<div class="blog-post">' +
			'<h3>{{ title }}</h3>' +
			'<button v-on:click="$emit(\'enlarge-text\',0.5)">Enlarge text </button>'+
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
			],
			postFontSize: 1,
		},
		methods:{
			onEnlargeText: function(enlargeAmount){
				this.postFontSize +=enlargeAmount
			}
		},
	});
</script>
</body>
</html>