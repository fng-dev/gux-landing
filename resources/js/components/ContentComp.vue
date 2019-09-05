<template>
  <div class="content">

    <content-left :esconder="status"></content-left>

    <side-bar @muda="hide()"></side-bar>

  </div>
</template>

<script>
export default {
    data(){
        return{
            status: true
        }
    },
    methods:{
        hide(){
            this.status = this.status == true ? false : true;
        }
    },
    created(){

    }
}
</script>
