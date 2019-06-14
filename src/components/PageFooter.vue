<template>
  <footer>
    <b-container fluid>
      <b-row>
        <b-col  sm="12" md="4">
          <p><img src="@/assets/email.png" class="[ footer_icons ]" alt="Icon of an email letter"> markus_eldevik@hotmail.com</p>
        </b-col>

        <b-col sm="12" md="4">
          <p><img src="@/assets/phone.png" id="smaller" alt="Icon of a phone"> +47 941 93 721</p>
        </b-col>

        <b-col sm="12" md="4">
          <p><img src="@/assets/instagram.png" class="[ footer_icons ]" alt="Icon for instagram"> @mographmark</p>
        </b-col>
      </b-row>
    </b-container>
  </footer>
</template>






<script>
export default {
  name: 'PageFooter',
}
</script>



<style lang="scss" scoped>
@import '@/styles/main.scss';

.footer_icons{
  width: 20px;
}

#smaller{
  width: 15px;
}

footer{
  background-color: $primary-black;
  border-top: 1px solid $primary-white;
  p{
    padding: 10px;
    text-align: left;
    font-size: $subheading-4-mobile;
    color: $primary-white;
    font-family: $header-font;
  }
}



@media screen and (min-width: 700px){
  footer{
    p{
      padding: 10px;
      text-align: center;
    }
  }
}



@media screen and (min-width: 900px){
  footer{
    p{
      padding: 40px;
    }
  }
}
</style>
