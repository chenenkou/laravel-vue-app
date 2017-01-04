<template>
    <div class="starter-template">
        <h1>{{ msg }}</h1>
        <p class="lead">{{ intro }}</p>
    </div>
</template>
<style scoped>
    .starter-template {
        padding: 40px 15px;
        text-align: center;
    }
</style>
<script>
    export default{
        name: 'intro-panel',
        data(){
            return{
                msg:'Laravel Vue App',
                intro: '单页、多页Web应用'
            }
        }
    }
</script>
