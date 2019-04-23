<template>
    <div class="container-fluid">
       <!--<h2>hi</h2>-->
        <nav class="navbar navbar-metaphor navbar-metaphor--light navbar-expand-md">
            <a class="navbar-brand" href="/logout">
                <span class="sr-only">CSUN Logo</span>
                <span class="navbar-brand__subbrand">
                    Classroom Profiles
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup2" aria-controls="navbarNavAltMarkup2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup2">
                <div class="navbar-nav text-center">
                    <a class="nav-item nav-link active" href='/home'>Home</a>
                    <a v-if="login" class="nav-item nav-link" href='logout'>Logout</a>
                   
<div v-else id="app">
    <a class="nav-item nav-link" @click="showModal">Login</a>
    <modal v-show="isModalVisible" @close="closeModal" header="Login">
        <div class="app-body">
            <slot>defualt of topnav.VUE</slot>
        </div>
    </modal>
</div>


                </div>
            </div>
        </nav>
    </div>
</template>

<script>
  import modal from './modal.vue';

  export default {
    name: 'app',
    components: {
      modal,
    },
    data () {
      return {
        isModalVisible: false,
      };
    },
    methods: {
      showModal() {
        this.isModalVisible = true;
      },
      closeModal() {
        this.isModalVisible = false;
      }
    },
  };
</script>
<style>
    .nav-item:hover {
    cursor: pointer;
}
</style>