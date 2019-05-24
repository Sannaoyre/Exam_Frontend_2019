<template>
  <div>
    <b-container fluid>
        <b-row v-for="time in timeline" :key="time" class="[ timeline ]">
              <b-col sm="6" md="5" lg="5">
                  <div v-text="time.circle " class="[ timeline_cicle ]"></div>
                  <div class="[ timeline_line ]"></div>


              </b-col>
              <b-col sm="6" md="7" lg="7">
                <h2 v-text="time.year" class="[ timeline_year ]"></h2>
                <p v-text="time.title" class="[ timeline_title ]"></p>
                <p v-text="time.description" class="[ timeline_description ]"></p>
              </b-col>
        </b-row>
    </b-container>
</div>
</template>

<script>
export default {
  name: 'Timeline',
  data () {
    return {
      timeline: [
        { title: 'Film editor', year: '2017-today', description: 'lorem ipsum dolor sit amet', circle: '', line: ''},
        { title: 'Film student', year: '2015-2017', description: 'lorem ipsum dolor sit amet', circle: '', line: ''},
        { title: 'Diamond Award', year: '2017', description: 'lorem ipsum dolor sit amet', circle: '', line: ''},
        { title: 'Military', year: '2014-2015', description: 'lorem ipsum dolor sit amet', circle: '', line: ''},

      ]
    }
  },
}


</script>

<style lang="scss" scoped>
@import '@/styles/main.scss';


.timeline{
    color: $primary-white;
  &_year{
    @extend .font_light ;
    font-size: $subheading-1;
    margin-top: 2%;
  }
  &_title{
    font-size: $subheading-4;
  }
  &_description{

  }
  &_line{
        height: 80%;
        border-right: 3px solid $primary-orange ;
        float: right;
        margin-right: -2.8%;
        border-radius: 3em;
        margin-top: 10%;
      }
  &_cicle{
        width: 30px;
        height: 30px;
        border-radius: 100%;
        background-color: $primary-black;
        float: right;
        margin-bottom: 30%;
        margin-top: 5%;
        border: 5px solid $primary-orange;
      }
}

</style>
