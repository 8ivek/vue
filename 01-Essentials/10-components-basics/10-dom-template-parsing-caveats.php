<html>
<head>
    <title>DOM Template Parsing Caveats - Components Basics</title>
    <script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
    <h2>DOM Template Parsing Caveats - Components Basics</h2>

    <table>
        <tr is="alert-box"></tr>
    </table>

</div>
<script type="text/javascript">
    Vue.component('alert-box',{
        template: `<tr class='demo-alert-box'><strong>Something bad happened!</strong></tr>`,
    });
    var vm = new Vue({
        el: '#app',
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