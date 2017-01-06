<template>
    <div class="jumbotron">
        <h1>{{ title }}</h1>
        <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
    </div>
</template>
<style>
</style>
<script>
    export default{
        name: 'intro-me',
        data(){
            return{
                title: ''
            }
        },
        components:{},
        created() {
             this.$http.get('/api/about/getIntro').then((response) => {
                // success callback
                this.title = response.body.title;
                // console.log(response);
              }, (response) => {
                // error callback
              });
        }
    }
</script>
