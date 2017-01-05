<template>
    <div>
        <v-nav></v-nav>

        <div class="container">
            <p>
                <!-- 使用 router-link 组件来导航. -->
                <!-- 通过传入 `to` 属性指定链接. -->
                <!-- <router-link> 默认会被渲染成一个 `<a>` 标签 -->
                <router-link to="/dashboard/foo">Go to Foo</router-link>
                <router-link to="/dashboard/bar">Go to Bar</router-link>
            </p>
            <!-- 路由出口 -->
            <!-- 路由匹配到的组件将渲染在这里 -->
            <router-view></router-view>
        </div>


    </div>
</template>
<style>

</style>
<script>
    import Nav from '../../components/Nav/Nav.vue';

    export default{
        name: 'dashboard',
        data(){
            return{
                msg:'hello vue'
            }
        },
        components:{
            'v-nav':Nav
        }
    }
</script>
