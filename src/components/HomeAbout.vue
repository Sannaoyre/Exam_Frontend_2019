<template>
  <div class="[ wrapper ]" id="about">

      <div class="[ title ]">
        <h1 class="[ title_font ]">I'm Markus Eldevik</h1>
        <h2 class="[ title_font-light ]">ABOUT ME</h2>
      </div>

      <b-container fluid class="[ about ]" >
          <b-row>
                <b-col sm="12" md="4" lg="4">
                  <img src="@/assets/profile_picture.png" alt="Profile picture">
                </b-col>

                <b-col sm="12" md="4" lg="4">
                  <h3 class="[ about_headline ]">Hey!</h3>
                  <p class="[ about_text ]">I am a 24-year-old film editor based in Norway. I am progressively leaning more towards motion graphic design. I do jobs on advertisement projects, music videos and logo animations.
                  </p>
                </b-col>

                <b-col  sm="12" md="4" lg="4">
                  <div class="[ skillbar ]">

                    <div class="[ skillbar-outer ]">
                        <div class="[ skillbar-inner ]">
                          <div><p class="[ skillbar_inner-text ]">Adobe Premiere Pro</p></div>
                        </div>
                    </div>

                    <div class="[ skillbar-outer ]">
                        <div class="[ skillbar-innerTwo ]">
                          <div><p class="[ skillbar_inner-text ]">Adobe After Effects</p></div>
                        </div>
                    </div>

                    <div class="[ skillbar-outer ]">
                        <div class="[ skillbar-innerThree ]">
                          <div><p class="[ skillbar_inner-text ]">Adobe Photoshop</p></div>
                        </div>
                    </div>

                    <div class="[ skillbar-outer ]">
                        <div class="[ skillbar-innerFour ]">
                          <div><p class="[ skillbar_inner-text ]">Adobe Illustrator</p></div>
                        </div>
                    </div>

                    <div class="[ skillbar-outer ]">
                        <div class="[ skillbar-innerFive ]">
                          <div><p class="[ skillbar_inner-text ]">Adobe Audition</p></div>
                        </div>
                    </div>

                  </div>

                </b-col>
          </b-row>
    </b-container>
  </div>
</template>

<script>
export default {
  name: 'HomeAbout',



}

</script>


<style lang="scss" scoped>
@import '@/styles/main.scss';


img{
  width: 80%;
  display: block;
  margin-left: auto;
  margin-right: auto
}

.about{
  &_text{
    color: $primary-white;
    font-size: $subheading-4-mobile;
    font-family: $text-font;
    font-weight: 100;
  }
  &_headline{
    color: $primary-white;
    font-size: $subheading-3-mobile;
    font-family: $text-font;
    font-weight: 100;
  }
}

.skillbar{
  &-outer{
    width: 100%;
    border-radius: 3em;
    background-color: $primary-white;
  }
  &-inner{
    width: 100%;
    border-radius: 3em;
    background-color: $primary-orange;
    animation: progressAnimation 6s;
    animation-iteration-count: infinite;


    &Two{
        width: 80%;
        border-radius: 3em;
        background-color: $primary-orange;
        animation: progressAnimationTwo 6s;
        animation-iteration-count: infinite;

    }
    &Three{
      width: 70%;
      border-radius: 3em;
      background-color: $primary-orange;
      animation: progressAnimationThree 6s;
      animation-iteration-count: infinite;
    }
    &Four{
      width: 60%;
      border-radius: 3em;
      background-color: $primary-orange;
      animation: progressAnimationFour 6s;
      animation-iteration-count: infinite;
    }
    &Five{
      width: 50%;
      border-radius: 3em;
      background-color: $primary-orange;
      animation: progressAnimationFive 6s;
      animation-iteration-count: infinite;
    }
    &-text{
      margin: 10px;
      font-size: 16px;
      color: $primary-black;
    }
  }
}

.skillbar_inner-text{
  margin: 20px;
  padding: 2px;
  font-size: 13px;
  color: $primary-black;
}



@media screen and (min-width: 700px){
  .about{
    &_text{
      font-size: $subheading-4-mobile;
    }
    &_headline{
      font-size: $subheading-3;
    }
  }

  .skillbar{
    &_inner-text{
      margin: 12px;
      font-size: 8px;
    }
  }

  img{
    margin-top: -10%;
  }
}




@media screen and (min-width: 900px){
  .about{
    &_text{
      font-size: $subheading-4;
    }
    &_headline{
      font-size: $subheading-3;
    }
  }

  .skillbar{
    &_inner-text{
      margin: 18px;
      font-size: 16px;
    }
  }
}

</style>
