<html>
<head>
    <title>Dynamic Components Binding to a component's options object - Components Basics</title>
    <script src="../../js/vue.js"></script>
</head>
<body>
<div id="app">
    <h2>Dynamic Components Binding to a component's options object - Components Basics</h2>
    <button
        v-for="tab in tabs"
        v-bind:key="tab.name"
        v-bind:class="['tab-button', { active: currentTab.name === tab.name }]"
        v-on:click="currentTab = tab"
    >{{ tab.name }}</button>

    <component v-bind:is="currentTab.component" class="tab"></component>

</div>
<script type="text/javascript">
    var tabs = [
        {
            name: 'Home',
            component:{
                template: '<div>Home component</div>',
            }
        },
        {
            name: 'Posts',
            component: {
                template: '<div>Posts component</div>',
            }
        },
        {
            name: 'Archive',
            component: {
                template: '<div>Archive component</div>',
            }
        }
    ]
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
            currentTab: tabs[0],
            tabs: tabs,
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