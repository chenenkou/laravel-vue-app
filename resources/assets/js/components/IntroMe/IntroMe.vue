<template>
    <div class="jumbotron">
        <h2 v-if="dataStatus === 0">Loading...</h2>
        <h1>{{ title }}</h1>
        <p>{{ content }}</p>
    </div>
</template>
<style>
</style>
<script>
    export default{
        name: 'intro-me',
        data(){
            return{
                dataStatus: 0,
                title: '',
                content: ''
            }
        },
        components:{},
        created() {
             this.$http.get('/api/about/getIntro').then((response) => {
                // success callback

                // console.log(response);
                this.dataStatus = response.status;
                this.title = response.body.title;
                this.content = response.body.content;
              }, (response) => {
                // error callback

              });
        }
    }
</script>
