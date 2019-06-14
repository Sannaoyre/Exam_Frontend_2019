<template>
 <div>
     <nav v-on:scroll="handleScroll">
       <div class="[ navigation ]">
        <router-link to="/" class="[ navigation_imagelink ]"><img src="@/assets/logo_white.png" alt="Logo for Markus" class="[ logo ]"></router-link>

          <div id="menuToggle">

            <input type="checkbox" id="checkbox" />
               <span ></span>
               <span></span>
               <span></span>

             <section id="menu" >
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

  methods: {
    handleClick(e){
      var box = document.getElementById('checkbox');
      if(e.target.id == "checkbox"){
        return false
      }
      if(e.target.id != "menu" && box.checked == true){
            box.checked = false;
     }

    },
    
   handleScroll () {
      var e = document.getElementsByTagName('nav');

      if(window.scrollY <= 10){
        e[0].classList.remove("navOnScroll");
      }
      else{
        e[0].classList.add("navOnScroll");
      }
    },
  },


   created () {
    window.addEventListener('scroll', this.handleScroll);
    window.addEventListener('click', this.handleClick);
  },

   destroyed () {
    window.removeEventListener('scroll', this.handleScroll);
    window.removeEventListener('click', this.handleClick);
  }
}

</script>





<style lang="scss" scoped>
@import '@/styles/main.scss';

.navigation_imagelink{
  width: 5%;
}
</style>
