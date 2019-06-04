
<template>
 <div>
     <nav v-on:scroll="handleScroll">
       <img src="@/assets/logo_white.png" alt="Profile picture">
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
      var e = document.getElementsByTagName('nav');
      if(window.scrollY <= 10){
        console.log('I am at the top');
        e[0].classList.remove("navOnScroll");
      }
      else{

        e[0].classList.add("navOnScroll");
      }
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

img{
  width: 5%;
  padding: 1%;
}
</style>
