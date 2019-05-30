<template>
  <div>
      <nav id="navbar" v-on:scroll="handleScroll">
          <router-link
                       @click.native.prevent="scrollFix(routes.page)"
                       v-for="routes in links"
                       v-bind:key="routes.id"
                      :to="`${routes.page}`">{{routes.text}}
         </router-link>

      </nav>


  </div>
</template>

<script>

export default {
  name: 'PageNavigation',
  data(){
    return{
      links: [
        {
          id: 0,
          text: 'Home',
          page: '/'
        },
        {
          id: 0,
          text: 'About',
          page: '/#about'
        },
        {
          id: 0,
          text: 'Projects',
          page: '/#/projects'
        },
        {
          id: 0,
          text: 'Contact',
          page: '/#contact'
        }
      ],
      scrolled: false
    }
  },

  methods: {
    scrollFix: function(hashbang)
    {
      location.href = hashbang;
    },

    handleScroll () {
       console.log('scrolling');



    }
  },
  created () {
   window.addEventListener('scroll', this.handleScroll);
 },
 destroyed () {
   window.removeEventListener('scroll', this.handleScroll);
 }
}




</script>









<style lang="scss" scoped>
@import '@/styles/main.scss';
</style>
