<template>
  <div class="[ header ]">

      <div class="[ header_background ]">
          <div class="[ header_background-square ]">
              <video autoplay muted loop>
                  <source src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4" type="video/mp4">
              </video>
          </div>
          <div class="header_background-text">
              <h2 id="firstText"><span id="firstText_bold">MY</span> PROJECTS</h2>
              <h3 id="secondText">FILM EDITING</h3>
              <h4 id="thirdText">	&amp; AND MOTION GRAPHICS</h4>
         </div>
      </div>


  </div>
</template>

<script>
export default {
  name: 'ProjectsHeader'
}
</script>

<style lang="scss" scoped>
@import '@/styles/main.scss';

.header{
  width: 100%;
  height: 100%;
    &_background{
      height: 600px;
      background-size: cover;
      background-image: linear-gradient(to right, $primary-black 50%, $primary-orange 50%);

        &-square{
          top: 30%;
          width: 200px;
          height: 200px;
          display: flex;
          overflow: hidden;
          margin-left: auto;
          margin-right: auto;
          position: relative;
          outline-offset: 5px;
          align-items: center;
          display: -webkit-box;
          display: -ms-flexbox;
          display: -webkit-flex;
          justify-content: center;
          transform: rotate(45deg);
          background-color: $primary-gray;
          outline: 4px solid $primary-gray;
          box-shadow: 5px 10px 18px $primary-black;
        }

        &-text{
          margin-left: 5%;
          margin-top: 60%;
          font-weight: 100;
          line-height: 0.5em;
          color: $primary-white;
          font-family: $header-font;

      }
    }
  }

    #firstText{
      font-size: $subheading-4;
      font-weight: 100;
    }
    #firstText_bold{
      font-weight: bolder;
    }
    #secondText{
      font-weight: 100;
      font-size: 13.5px;
      letter-spacing: 0.2em;
    }
    #thirdText{
      font-size: 8.5px;
      letter-spacing: 0.04em;
      color: $primary-orange;
    }

    video {
    min-height: 150%;
    margin-top: 100px;
    position: absolute;
    margin-left: -100px;
    transform: rotate(-45deg);
  }

@media screen and (min-width: 700px){
  .header{
      &_background{
          height: 800px;
          &-square{
            width: 300px;
            height: 300px;
          }
          &-text{
            margin-top: 40%;
        }
      }
    }

    #firstText{
      font-size: 38px;
    }
    #secondText{
      font-size: 28px;
    }
    #thirdText{
      font-size: $subheading-4;
    }
}

@media screen and (min-width: 900px){

.header{
    &_background{
      height: 800px;
        &-square{
          top: 20%;
          height:400px;
          width: 400px;
        }
        &-text{
          margin-top: 10%;
      }
    }
  }

  #firstText{
    font-size: 40px;
  }
  #secondText{
    font-size: $subheading-1;
  }
  #thirdText{
    font-size: 19px;
  }
}


@media screen and (min-width: 1500px){
  .header{
      &_background{
          height: 1000px;
          &-square{
            width: 500px;
            height: 500px;
          }
          &-text{
        }
      }
    }

    #firstText{
      font-size: 60px;
    }
    #secondText{
      font-size: 45px;
    }
    #thirdText{
      font-size: 28.5px;
    }
}



</style>
