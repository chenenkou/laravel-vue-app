<template>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Laravel Vue App</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li v-for="vo in navs">
                        <a :href="vo.href">{{ vo.name }}</a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</template>
<style>

</style>
<script>
    export default{
        name: 'iNav',
        data(){
            return{
                navs: [
                    { name: 'Home', href: '/'},
                    { name: 'About', href: '/about'}
                ]
            }
        }
    }
</script>
