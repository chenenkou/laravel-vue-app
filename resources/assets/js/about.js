require('./bootstrap');

import App from './App.vue'
import VueRouter from 'vue-router';

Vue.use(VueRouter);

// 2. 定义路由
// 每个路由应该映射一个组件。 其中"component" 可以是
// 通过 Vue.extend() 创建的组件构造器，
// 或者，只是一个组件配置对象。
// 我们晚点再讨论嵌套路由。
const routes = [
    {
        path: '/about',
        component: require('./views/About/About.vue'),
        children: [
            {
                path: '/',
                redirect: '/about/intro'
            },
            {
                path: 'intro',
                component: require('./components/IntroMe/IntroMe.vue')
            },
            {
                path: 'contact',
                component: require('./components/ContactMe/ContactMe.vue')
            }
        ]
    }
];

// 3. 创建 router 实例，然后传 `routes` 配置
// 你还可以传别的配置参数, 不过先这么简单着吧。
const router = new VueRouter({
    mode: 'history',
    base: __dirname,
    routes // （缩写）相当于 routes: routes
});

// 4. 创建和挂载根实例。
// 记得要通过 router 配置参数注入路由，
// 从而让整个应用都有路由功能
new Vue({
    el: "#app",
    router,
    render: h => h(App)
});
