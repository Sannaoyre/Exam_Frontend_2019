<template>
  <div class="[ wrapper ]">

    <div class="[ headline ]">
      <h1 class="[ headline_one ]">View my timeline</h1>
      <h2 class="[ headline_two ]">TIMELINE</h2>
    </div>

    <b-container fluid>
        <b-row  v-for="time in timeline" :key="time" class="[ timeline ]">
              <b-col cols="4" md="5" lg="5">
                  <div v-text="time.circle " class="[ timeline_cicle ]"></div>

              </b-col>
              <b-col cols="8" md="7" lg="7">
                <h2 v-text="time.year" class="[ timeline_year ]" v-scroll-reveal.reset="{ delay: 250 }"></h2>
                <p v-text="time.title" class="[ timeline_title ]" v-scroll-reveal.reset="{ delay: 500 }"></p>
                <p v-text="time.description" class="[ timeline_description ]" v-scroll-reveal.reset="{ delay: 700 }"></p>
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
        { title: 'Film Editor', year: '2018-present', description: 'Work freelance as Film Editor', circle: ''},
        { title: 'Award', year: '2018', description: 'Diamond Award for best film', circle: '', line: ''},
        { title: 'Student', year: '2016-2018', description: 'Noroff Institute, Film Editing Course', circle: ''},
        { title: 'Military', year: '2015-2016', description: "His Majesty the King's Guard ", circle: ''},
        { title: 'Student', year: '2012-2015', description: 'Studied general studies at Høyanger High School', circle: ''},
      ]
    }
  }
}


</script>

<style lang="scss" scoped>
@import '@/styles/main.scss';

.wrapper{
  margin-left: 5%;
  margin-right: 5%;
  margin-top: 10%;
}

.headline{
    @extend .title ;
  &_one{
    @extend .title_font ;
  }
  &_two{
    @extend .title_font-light ;
  }
}
.timeline{
    color: $primary-white;
    font-family: $text-font;
    padding-bottom: 20%;


  &_year{
    @extend .font_light ;
    font-size: $subheading-1-mobile;
    margin-top: 2%;
  }
  &_title{
    @extend .font_light ;
    font-size: $subheading-2-mobile;

  }
  &_description{
    @extend .font_light ;
    font-size: $subheading-4-mobile;
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
        text-align: center;
      }
}

.timeline_cicle::before{
  content: '';
  position: absolute;
  width: 0.2em;
  height: 150%;
  background: $primary-orange;
  z-index: -1;
}



@media screen and (min-width: 700px){
  .timeline{
      padding-bottom: 5%;

    &_year{
      font-size: $subheading-1-mobile;
      margin-top: 2%;
    }
    &_title{
      font-size: $subheading-2-mobile;
    }
    &_description{
      font-size: $subheading-4-mobile;
    }
    &_cicle{
          margin-bottom: 30%;
          margin-top: 5%;
        }
    }
}



@media screen and (min-width: 900px){
  .timeline{
      padding-bottom: 5%;

    &_year{
      font-size: $subheading-1;
      margin-top: 2%;
    }
    &_title{
      font-size: $subheading-2;
    }
    &_description{
      font-size: $subheading-4;
    }
    &_cicle{
          margin-bottom: 10%;
          margin-top: 5%;
        }
  }
}



</style>
