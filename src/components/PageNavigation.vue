<template>
  <div>
      <nav id="navbar">
        <router-link @click.native="scrollFix(routes.page)"
                     v-for="routes in links"
                     v-bind:key="routes.id"
                    :to="`${routes.page}`">{{routes.text}}</router-link>
      </nav>
    <!--  <router-link to="/#contact" @click.native="scrollFix(routes.page)">Contact</router-link>-->
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
    },

  }
}


</script>









<style lang="scss" scoped>
@import '@/styles/main.scss';
</style>
