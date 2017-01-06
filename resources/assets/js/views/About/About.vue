<template>
    <div>
        <v-nav></v-nav>

        <div class="container">

            <div class="row row-offcanvas row-offcanvas-right">
                <v-side-nav></v-side-nav>


                <div class="col-xs-12 col-sm-9">
                    <router-view></router-view>
                </div><!--/.col-xs-12.col-sm-9-->


            </div><!--/row-->

            <hr>

            <footer>
                <p>© Company 2016</p>
            </footer>

        </div>

    </div>
</template>
<style>

</style>
<script>
    import Nav from '../../components/Nav/Nav.vue';
    import SideNav from '../../components/SideNav/SideNav.vue';

    export default{
        name: 'about',
        data(){
            return{
                msg:'hello vue'
            }
        },
        components:{
            'v-nav': Nav,
            'v-side-nav': SideNav
        }
    }
</script>
