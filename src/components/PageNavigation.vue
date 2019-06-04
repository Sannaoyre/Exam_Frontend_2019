<template>
  <div>

    <nav>
        <img src="@/assets/logo_white.png" alt="Profile picture">
        <a href="#contact">Contact</a>
        <a href="#about" v-if="this.$route.matched[0].name === 'home' || this.$route.matched[0].name === 'projects'">About</a>

        <router-link to="projects">Projects</router-link>
        <router-link to="/">Home</router-link>
    </nav>

  </div>
</template>

<script>

export default {
  name: 'PageNavigation',

  methods: {

    handleScroll () {
      console.log('scrolling');
      document.body.scrollTop=0;
    }
   },
    created () {
      console.log('My route name', this.$route.matched[0].name.name);
     window.addEventListener('scroll', this.handleScroll);

    },
    destroyed () {
      window.removeEventListener('scroll', this.handleScroll);
    }
  }

</script>


<style lang="scss" scoped>
@import '@/styles/main.scss';

img{
  width: 5%;
  padding: 1%;
}

</style>
