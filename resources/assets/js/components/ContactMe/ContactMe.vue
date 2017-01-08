<template>
    <div class="jumbotron">
        <h1>{{ title }}</h1>
        <p>{{ content }}</p>
    </div>
</template>
<style>

</style>
<script>
    export default{
        name: 'contact-me',
        data(){
            return{
                title: '联系方式',
                content: '...'
            }
        },
        components:{}
    }
</script>
