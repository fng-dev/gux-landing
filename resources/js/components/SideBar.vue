<template>
  <div class="side-bar" id="sidebar" ref="sidebar">

    <div class="container widget">

      <div class="row mb-4 mt-3 btn-toggle">
        <div class="col-12">
          <i class="fas fa-bars" @click="toggleMenu()"></i>
        </div>
      </div>
      <hr />

      <div class="row text-left my-3">
        <div class="col-12">
          <i class="fas fa-link mr-2"></i><span class="label" :style="{'display':cel, 'transition':'1s'}"> SideBar Links</span>
        </div>
      </div>
      <hr />

      <div class="row mb-4">
        <div class="col-12">
          <a href="#"><i class="fas fa-home mr-2"></i></a>
          <a href="#" class="label" :style="{'display':cel, 'transition':'1s'}">Link 1</a>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-12">
          <a href="#"><i class="fas fa-envelope mr-2"></i></a>
          <a href="#" class="label" :style="{'display':cel, 'transition':'1s'}">Link 2</a>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-12">
          <a href="#"><i class="fas fa-cogs mr-2"></i></a>
          <a href="#" class="label" :style="{'display':cel, 'transition':'1s'}">Link 3</a>
        </div>
      </div>
      <hr>
    </div>
    <!-- Final Container Links -->

    <div class="container widget">
        <div class="row text-left my-3">
        <div class="col-12">
          <i class="fas fa-plus-square mr-2"></i><span class="label" :style="{'display':cel, 'transition':'1s'}"> Another Widget</span>
        </div>
      </div>
      <hr />

      <div class="row">
          <div class="col-12 label"  :style="{'display':cel, 'transition':'1s'}">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          </div>
      </div>
    </div>
  </div>
</template>


<style lang="css">
.side-bar {
  width: 350px;
  background-color: #e5e5e5;
  transition: 0.7s;
}

.btn-toggle {
  display: none;
}

@media screen and (max-width: 700px) {
  .side-bar {
    width: 50px;
    background-color: #e5e5e5;
    transition: 0.7s;
  }

  .title {
    display: none;
  }

  .label {
    display: none;
    transition: 1s;
  }

  .btn-toggle {
    display: block;
  }
}
</style>

<script>
export default {
  data() {
    return {
      toogle: false,
      cel: '',
    };
  },
  methods: {
    toggleMenu() {
      this.toogle = this.toogle == false ? true : false;
    }
  },
  watch: {
    toogle: function(newValue, OldValue) {
      if (newValue) {
        this.$refs.sidebar.style.width = "70%";
        setTimeout(() => this.cel = 'initial', 500);
        this.$emit("muda");
      } else {
        this.$refs.sidebar.style.width = "50px";
        this.cel = 'none';
        this.$emit("muda");
      }
    }
  }
};
</script>
