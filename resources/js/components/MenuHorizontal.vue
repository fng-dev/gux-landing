<template>
  <nav
    class="navbar navbar-expand-lg navbar-expand-md navbar-dark rounded-bottom m-0 p-0" style="z-index:1"
  >
    <button
      class="navbar-toggler btn-menu"
      type="button"
      data-toggle="collapse"
      data-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Link1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link2</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Link3</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Link4</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Link5</a>
        </li>
      </ul>
    </div>
  </nav>
</template>

<style>
.navbar {
  background-color: #666 !important;
  border: 0px !important;
  color: #FFF!important;
}

ul {
  padding: 0px;
}
ul li {
  border-right: 1px solid #333;
  padding: 4px 15px;
  color: #FFF!important;
}

li a{
    color:#FFF!important;
}

.btn-menu{
    border: 0;
    color: #FFF!important;
    padding-top:10px;
}


</style>
