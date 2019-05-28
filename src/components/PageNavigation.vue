<template>
  <div>
      <nav id="navbar">
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
      ]
    }
  },

  methods: {
    scrollFix: function(hashbang)
    {
      location.href = hashbang;


    }
  //  Scroll(){
  //    document.querySelector(this.href).scrollIntoView({ behavior: 'smooth'})
  //  }

  }
}


</script>









<style lang="scss" scoped>
@import '@/styles/main.scss';
</style>
