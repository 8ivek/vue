<html>
<head>
    <title>Global / Local components Registration - Components Registration</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
    <script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
    <h2>Example of Global components Registration - Components Registration</h2>

    <component-a></component-a>
    <component-b></component-b>

    <h2>Example of Local components registration - Components Registration</h2>

    <component-c></component-c>
    <component-d></component-d>

    <p>Note that locally registered components are not also available in subcomponents.</p>

</div>
<script type="text/javascript">
    Vue.component('component-a',{
        template: `<div class='demo-alert-box'>Global Component A</div>`,
    });

    Vue.component('component-b',{
        template: `<div class='demo-alert-box'>Global Component B</div>`,
    });

    var ComponentC = {
        template:`<div class='demo-alert-box'>Local Component C</div>`
    }
    var ComponentD = {
        template:`<div class='demo-alert-box'>Local Component D</div>`
    }
    var vm = new Vue({
        el: '#app',
        components:{
            'component-c':ComponentC,
            'component-d':ComponentD,
        }
    });
</script>
</body>
</html>