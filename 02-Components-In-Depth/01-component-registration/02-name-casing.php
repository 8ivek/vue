<html>
<head>
    <title>Name Casing - Components Registration</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
    <script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
    <h2>Name Casing - Components Registration</h2>
    <p>kebab-case vs PascalCase</p>
    <p>When defining a component with kebab-case, you must also use kebab-case when referencing its custom element, such as in &lt;my-component-name&gt;.</p>
    <p>When defining a component with PascalCase, you can use either case when referencing its custom element. That means both &lt;my-component-name&gt; and &lt;MyComponentName&gt; are acceptable. Note, however, that only kebab-case names are valid directly in the DOM (i.e. non-string templates).</p>

    <hr />

    <my-component-name></my-component-name>
    <my-big-component></my-big-component>
    <MyBigComponent></MyBigComponent><!--this dont' work in dom thats what I know.-->

</div>
<script type="text/javascript">
    Vue.component('my-component-name',{
        template: `<div class='demo-alert-box'>kebab-case!</div>`,
    });
    Vue.component('MyBigComponent',{
        template: `<div class='demo-alert-box'>PascalCase!</div>`,
    });
    var vm = new Vue({
        el: '#app',
    });
</script>
</body>
</html>