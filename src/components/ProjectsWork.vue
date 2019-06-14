<template>
  <div><br><br>
    <div class="blackBox">

      <tabs class="[ wrapper ]">

 <!--////////Tab for travel videos////////-->
          <tab name="Travel videos" :selected="true">
              <b-container fluid>
                <b-row>
                  <b-col class="[ film ]" v-for="film in films" v-bind:key="film.id" sm="12" md="4" lg="4">

                    <h2 v-text="film.title"  class="[ film_title ]" ></h2>

                    <iframe :src="film.src" frameborder="0" allow="autoplay; fullscreen" allowfullscreen align="middle" title="Film"></iframe>

                    <button v-on:click="hideFilms" class="[ dropdownButton ]" :id="film.id">About this project</button>

                    <transition name="fade">
                          <p v-if="film.show" class="[ dropdownText ]" v-text="film.description"></p>
                    </transition>


                  </b-col>
                </b-row>
              </b-container>
          </tab>


 <!--////////Tab for Music Videos////////-->
          <tab name="Music Videos">
            <b-container fluid>
              <b-row>
                <b-col class="[ film ]" v-for="musicvideo in musicvideos" v-bind:key="musicvideo.id" sm="12" md="4" lg="4">

                  <h2 v-text="musicvideo.title"  class="[ film_title ]"></h2>

                  <iframe :src="musicvideo.src" frameborder="0" allow="autoplay; fullscreen" allowfullscreen align="middle" title="Film"></iframe>

                  <button v-on:click="hideMusicvideos" class="[ dropdownButton ]" :id="musicvideo.id">About this project</button>

                  <transition name="fade"><p v-if="musicvideo.show" class="[ dropdownText ]" v-text="musicvideo.description"></p></transition>

                </b-col>
              </b-row>
            </b-container>
          </tab>



 <!--////////Tab for Short films////////-->
          <tab name="Short films">
            <b-container fluid>
              <b-row>
                <b-col class="[ film ]" v-for="shortfilm in shortfilms" v-bind:key="shortfilm.id" sm="12" md="4" lg="4">

                  <h2 v-text="shortfilm.title"  class="[ film_title ]"></h2>

                  <iframe :src="shortfilm.src" frameborder="0" allow="autoplay; fullscreen" allowfullscreen align="middle" title="Film"></iframe>

                  <button v-on:click="hideShortfilms" class="[ dropdownButton ]" :id="shortfilm.id">About this project</button>

                  <transition name="fade"><p v-if="shortfilm.show" class="[ dropdownText ]" v-text="shortfilm.description"></p></transition>

                </b-col>
              </b-row>
            </b-container>
          </tab>



 <!--////////Tab for graphics////////-->
          <tab name="Graphics">
            <b-container fluid>
              <b-row>
                <b-col class="[ film ]" v-for="graphic in graphics" v-bind:key="graphic.id" sm="12" md="4" lg="4">

                  <h2 v-text="graphic.title"  class="[ film_title ]"></h2>

                  <iframe :src="graphic.src" frameborder="0" allow="autoplay; fullscreen" allowfullscreen align="middle" title="Film"></iframe>

                  <button v-on:click="hideGraphics" class="[ dropdownButton ]" :id="graphic.id">About this project</button>

                  <transition name="fade">
                    <p v-if="graphic.show" class="[ dropdownText ]" v-text="graphic.description"></p></transition>

                </b-col>
              </b-row>
            </b-container>
          </tab>


        </tabs>
    </div>

<!--////////Background-boxes////////-->
    <div class="[ gradient2BoxReverse ]"></div>
    <div  class="[ gradient2Box ]"></div>
    <div  class="[ blackBox ]"></div>

  </div>
</template>



<script>
import tabs from '@/components/ProjectsTabs.vue'
import tab from '@/components/ProjectsTab.vue'

export default {
  name: 'ProjectsWork',
  components: {
    tabs,
    tab
  },

  data () {
    return {
      films: [
        { title: 'Destination Stranda', src: 'https://player.vimeo.com/video/318919381', description: 'Video presentation of Stranda in Møre og Romsdal, Norway. Made in 2019', show: false, id:1},
        { title: 'Destination Island', src: 'https://player.vimeo.com/video/290483803', description: 'Video presentation of Iceland. Made in 2018', show: false, id:2},
        { title: 'Rovia Island 2018', src: 'https://player.vimeo.com/video/298231639', description: 'Video used to sell trips to Iceland. Made in 2018', show: false, id:3},
        { title: 'Self Drive', src: ' https://player.vimeo.com/video/326678109', description: 'Video used to sell Self Drive packages in Norway, Iceland and Faroe Islands. Made in 2019', show: false, id:4},
      ],
      musicvideos: [
        { title: 'iEksil - Når Æ Dør', src: 'https://www.youtube.com/embed/a8fdHOBjU2Y?fbclid=IwAR1iKbGIxYn_zmhpR2ViwSNQc72lEtb9iV4caLGPdhLPr227hKnfBx2IHq0', description: 'Music video for the northern norwegian metal/rock group iEksil. Made in 2017', show: false, id:5},
        { title: 'Baia Wolf - I Hate Boys/Girls', src: 'https://www.youtube.com/embed/xbor8hHgF8w?fbclid=IwAR1iKbGIxYn_zmhpR2ViwSNQc72lEtb9iV4caLGPdhLPr227hKnfBx2IHq0', description: 'Music video for indie-rock music group based in Bergen, Norway. Made in 2018', show: false, id:6},
        { title: 'Resouza - Your Melody', src: 'https://www.youtube.com/embed/sf3JCmLbC54?fbclid=IwAR1iKbGIxYn_zmhpR2ViwSNQc72lEtb9iV4caLGPdhLPr227hKnfBx2IHq0', description: 'Music video for the Norwegian artist Resouza’s debut single. Made in 2018', show: false, id:7},
      ],
      shortfilms: [
        { title: 'Fredløs', src: 'https://www.youtube.com/embed/3dAIZV2iUeE?fbclid=IwAR1iKbGIxYn_zmhpR2ViwSNQc72lEtb9iV4caLGPdhLPr227hKnfBx2IHq0', description: ' Editor. Graduation film, Noroff Institute 2018', show: false, id:8 },
      ],
      graphics: [
        { title: 'Animations April 2019', src: 'https://player.vimeo.com/video/341667615', description: 'Logo Animations made in April 2019', show: false, id:9 },
        { title: ' End Credits, Jackpot', src: 'https://player.vimeo.com/video/240573309', description: 'End credits for the first short-film we made in Noroff Institute 2017/2018', show: false, id:10 },
      ],
    }
  },
  methods: {
    hideFilms(event){
      this.films.forEach(function(film){

        if(film.id  == event.target.id){
          if(film.show == false){
            film.show = true;
          }else{
            film.show =false;
          }
        }else{
          film.show = false;
        }
      })
    },
    hideMusicvideos(event){
      this.musicvideos.forEach(function(musicvideo){

        if(musicvideo.id == event.target.id){
          if(musicvideo.show == false){
            musicvideo.show = true;
          }else{
            musicvideo.show =false;
          }
        }else{
          musicvideo.show = false;
        }
      })
    },
    hideShortfilms(event){
      this.shortfilms.forEach(function(shortfilm){

        if(shortfilm.id == event.target.id){
          if(shortfilm.show == false){
            shortfilm.show = true;
          }else{
            shortfilm.show =false;
          }
        }else{
          shortfilm.show = false;
        }
      })
    },
    hideGraphics(event){
      this.graphics.forEach(function(graphic){

        if(graphic.id == event.target.id){
          if(graphic.show == false){
            graphic.show = true;
          }else{
            graphic.show =false;
          }
        }else{
          graphic.show = false;
        }
      })
    }
  }
}



</script>

<style lang="scss" scoped>
@import '@/styles/main.scss';

p{
  margin-top: 2%;
}

iframe{
  width: 100%;
  height: 100%;
  margin: 0 auto;
  display: block;
}
.film{
  margin: 15% 0% 50% 0%;
}



@media screen and (min-width: 700px){
  iframe{
    height: 150px;
  }

  .film{
    margin: 5% 0% 5% 0%;
  }
}



@media screen and (min-width: 1200px){
  iframe{
  width: 400px;
  height: 250px;
  }
}
</style>
