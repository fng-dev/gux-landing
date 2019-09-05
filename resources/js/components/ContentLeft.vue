<template>
  <div class="content-left" ref="content">

    <div class="container-fluid">

      <div class="row mt-4" v-for="item in arrContent" :key="item.id">

        <div class="col-12">

          <div class="row px-3 px-lg-5 px-xl-5 justify-content-center">
            <div
              class="col-12 col-lg-6 col-xl-3 col-md-8 bg-light border mb-3"
              style="min-height:200px"
            ></div>

            <div class="col-12 col-lg-12 col-xl-9 col-md-12">
              <div class="col-12 mb-3 text-left">
                <h4> {{item.title}}</h4>
              </div>

              <div class="col-12 mb-4">
                <p> {{item.content}}</p>
              </div>

              <div class="col-12">
                <a href="#">Read More</a>
              </div>
            </div>
          </div>

        </div>
    <hr style="width:80%">

      </div>


    </div>
  </div>
</template>

<style lang="css">
.content-left {
  flex: 1;
  background-color: #fff;
  overflow-y: auto;
  overflow-x: hidden;
  transition: 0.2s;
}

</style>

<script>
export default {
    props: ['esconder'],
    data(){
        return{
            title: "This is a Lorem Ipsum Heading",
            content: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            arrContent: [],
        }
    },
    watch:{
        esconder(newValue, oldValue){
            if(newValue == false){
                this.$refs.content.style.transition = ".2s";
                this.$refs.content.style.opacity = "0";
            }else{
                this.$refs.content.style.transition = "1s";
                this.$refs.content.style.opacity = "1";
            }
        }
    },
    mounted(){
        var item = {
            'id': 1,
            'title': this.title,
            'content': this.content
        };
        this.arrContent.push(item);
        var item2 = {
            'id': 2,
            'title': this.title,
            'content': this.content
        };
        this.arrContent.push(item2);
        var item3 = {
            'id': 3,
            'title': this.title,
            'content': this.content
        };
        this.arrContent.push(item3);
    }

}
</script>
