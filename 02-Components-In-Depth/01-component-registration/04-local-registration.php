<html>
<head>
    <title>Local Registration - Components Registration</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
    <script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
    <h2>If you wanted ComponentA to be available in ComponentB, you’d have to use</h2>

    <component-b></component-b>

</div>

<script type="text/javascript">

    var ComponentA = {
        template:`<p class='componentA'>Component A</p>`
    }
    var ComponentB = {
        components : {
            'component-a': ComponentA,
        },
        template:`<div class="componentB">Component B contains: <component-a></component-a></div>`
    }
    var vm = new Vue({
        el: '#app',
        components:{
            'component-b':ComponentB,
        }
    });
</script>

</body>
</html>