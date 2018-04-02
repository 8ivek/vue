<html>
<head>
    <title>Component Names - Components Registration</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
    <script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
    <h2>Component Names - Components Registration</h2>

    <my-component-name></my-component-name>

</div>
<script type="text/javascript">
    Vue.component('my-component-name',{
        template: `<div class='demo-alert-box'>Something Here!</div>`,
    });
    var vm = new Vue({
        el: '#app',
    });
</script>
</body>
</html>