<html>
<head>
    <title>Content Distribution with Slots - Components Basics</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
    <script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
    <h2>Content Distribution with Slots - Components Basics</h2>

    <alert-box>Something bad happened.</alert-box>

    <alert-box>Error because of typo error.</alert-box>

</div>
<script type="text/javascript">
    Vue.component('alert-box',{
        template: `<div class='demo-alert-box'><strong>Error!</strong> <slot></slot></div>`,
    });
    var vm = new Vue({
        el: '#app',
        data: {
            searchText: '',
        },
    });
</script>
<style type="text/css">
    .demo-alert-box{
        background:#f3beb8;
        border:1px solid #f09898;
        padding:10px 20px;
        margin:10px;
        font-size:1.2em;
    }
</style>
</body>
</html>