<html>
<head>
    <title>Dynamic Components - Components Basics</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
    <script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
    <h2>Dynamic Components - Components Basics</h2>
    <button
        v-for="tab in tabs"
        v-bind:key="tab"
        v-bind:class="['tab-button', { active: currentTab === tab }]"
        v-on:click="currentTab = tab"
    >{{ tab }}</button>

    <component v-bind:is="currentTabComponent" class="tab"></component>

</div>
<script type="text/javascript">
    Vue.component('tab-home', {
        template: '<div>Home component</div>'
    })
    Vue.component('tab-posts', {
        template: '<div>Posts component</div>'
    })
    Vue.component('tab-archive', {
        template: '<div>Archive component</div>'
    })
    var vm = new Vue({
        el: '#app',
        data: {
            currentTab:'Home',
            tabs: ['Home','Posts','Archive'],
        },
        computed:{
            currentTabComponent: function(){
                return 'tab-'+this.currentTab.toLowerCase()
            }
        }
    });
</script>
<style type="text/css">
    .tab-button {
        padding: 6px 10px;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
        border: 1px solid #ccc;
        cursor: pointer;
        background: #f0f0f0;
        margin-bottom: -1px;
        margin-right: -1px;
    }
    .tab-button:hover {
        background: #e0e0e0;
    }
    .tab-button.active {
        background: #e0e0e0;
    }
    .tab {
        border: 1px solid #ccc;
        padding: 10px;
    }
</style>
</body>
</html>