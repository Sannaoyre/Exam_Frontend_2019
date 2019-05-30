<template>
  <div><br><br>
    <div class="gradient2BoxReverse">

      <tabs class="[ wrapper ]">

 <!--////////Tab for films////////-->
          <tab name="Travel videos" :selected="true">
              <b-container fluid>
                <b-row>
                  <b-col class="[ film ]" v-for="film in films" sm="12" md="4" lg="4">

                    <h2 v-text="film.title"  class="[ film_title ]"></h2>
                    <iframe :src="film.src" frameborder="0" allow="autoplay; fullscreen" allowfullscreen align="middle"></iframe>
                    <button class="dropdownButton">
                      <p class="dropdownButton_title">About this project
                        <span class="dropdownButton_title-arrow" id="dropdownMark">V</span>
                      </p>
                      <div id="dropdownText" v-text="film.description"></div>
                    </button>

                  </b-col>
                </b-row>
              </b-container fluid>
          </tab>


 <!--////////Tab for Music Videos////////-->
          <tab name="Music Videos">
            <b-container fluid>
              <b-row>
                <b-col class="[ film ]" v-for="musicvideo in musicvideos" sm="12" md="4" lg="4">

                  <h2 v-text="musicvideo.title"  class="[ film_title ]"></h2>
                  <iframe :src="musicvideo.src" frameborder="0" allow="autoplay; fullscreen" allowfullscreen align="middle"></iframe>
                  <button class="dropdownButton">
                    <p class="dropdownButton_title">About this project
                      <span class="dropdownButton_title-arrow" id="dropdownMark">V</span>
                    </p>
                    <div id="dropdownText" v-text="musicvideo.description"></div>
                  </button>

                </b-col>
              </b-row>
            </b-container fluid>
          </tab>

 <!--////////Tab for Short films////////-->
          <tab name="Short films">
            <h1>Here is the graphics content</h1>
          </tab>


 <!--////////Tab for graphics////////-->
          <tab name="Graphics">
            <h1>Here is the graphics content</h1>
          </tab>


        </tabs>
      </div>

    <div  class="gradient2Box"></div>
    <div  class="blackBox"></div>

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
        { title: 'Destination Stranda', src: 'https://player.vimeo.com/video/318919381', description: 'Editor. Made in 2018'},
        { title: 'Destination Island', src: 'https://player.vimeo.com/video/290483803', description: 'Editor. Made in 2018'},
        { title: 'Rovia Island 2018', src: 'https://player.vimeo.com/video/298231639', description: 'Editor. Made in 2018'},
        { title: 'Fredløs', src: 'https://player.vimeo.com/video/318919381', description: 'Editor. Made in 2018'},
      ],
      musicvideos: [
        { title: 'iEksil - Når Æ Dør', src: 'https://www.youtube.com/embed/a8fdHOBjU2Y?fbclid=IwAR1iKbGIxYn_zmhpR2ViwSNQc72lEtb9iV4caLGPdhLPr227hKnfBx2IHq0', description: 'Music Video. Editor and VFX. Made in 2018'},
        { title: 'Baia Wolf - I Hate Boys/Girls', src: 'https://www.youtube.com/embed/xbor8hHgF8w?fbclid=IwAR1iKbGIxYn_zmhpR2ViwSNQc72lEtb9iV4caLGPdhLPr227hKnfBx2IHq0', description: ' Music Video. Editor. Made in 2018'},
        { title: 'Resouza - Your Melody', src: 'https://www.youtube.com/embed/sf3JCmLbC54?fbclid=IwAR1iKbGIxYn_zmhpR2ViwSNQc72lEtb9iV4caLGPdhLPr227hKnfBx2IHq0', description: 'Music Video. Editor. Made in 2018'},
      ],
      shortfilms: [
        { title: '', scr: '', description: '' },
        { title: '', scr: '', description: '' },
        { title: '', scr: '', description: '' },
      ],
      graphics: [
        { title: '', scr: '', description: '' },
        { title: '', scr: '', description: '' },
        { title: '', scr: '', description: '' },
      ]
    }

  }

}
</script>

<style lang="scss" scoped>
@import '@/styles/main.scss';

iframe{
  width: 100%;
  height: 100%;
}
.film{
  margin: 10% 0% 30% 0%;
}


@media screen and (min-width: 700px){
  iframe{
    height: 150px;
  }

  .film{
    margin: 5% 0% 0% 0%;
  }

}

@media screen and (min-width: 1200px){
  iframe{
  width: 400px;
  height: 250px;
  }


}
</style>
