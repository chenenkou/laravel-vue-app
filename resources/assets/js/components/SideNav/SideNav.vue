<template>
    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
        <div class="list-group">
            <router-link :to="vo.href" class="list-group-item" active-class="active" v-for="vo in navs">{{ vo.name }}</router-link>
        </div>
    </div>
</template>
<style>

</style>
<script>
    export default{
        name: 'side-nav',
        data(){
            return{
                navs: [
                    { name: '个人简介', href: 'intro'},
                    { name: '联系方式', href: 'contact'}
                ]
            }
        },
        components:{}
    }
</script>
