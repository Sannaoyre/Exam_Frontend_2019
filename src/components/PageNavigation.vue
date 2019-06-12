<template>
 <div>
     <nav v-on:scroll="handleScroll"   >
       <div class="[ navigation ]">
         <img src="@/assets/logo_white.png" alt="Logo for Markus" class="[ logo ]">


          <div id="menuToggle" >

            <input type="checkbox"/>
               <span ></span>
               <span></span>
               <span></span>

             <section id="menu">
                <router-link to="/">Home</router-link>
                <router-link to="projects">Projects</router-link>
             </section>

          </div>
       </div>
    </nav>
 </div>
</template>



<script>

export default {
  name: 'PageNavigation',
  data() {
      return {
        visible: true }
    },

  methods: {

   handleScroll () {
      var e = document.getElementsByTagName('nav');

      if(window.scrollY <= 10){
      //  console.log('I am at the top');
        e[0].classList.remove("navOnScroll");
      }
      else{
        e[0].classList.add("navOnScroll");
      }
    },

      open() { this.visible = true },
      close() { this.visible = false }
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
