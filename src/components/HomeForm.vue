<template>
  <div class="[ gradientBox ]">
    <div class="[ titleBlack ]">
      <h1 class="[ titleBlack_font ]">Get in touch</h1>
      <h2 class="[ titleBlack_font-light ]">CONTACT</h2>
    </div>
    <form>
      <b-container fluid id="contact">
        <b-row>
          <b-col sm="12" md="6"><input placeholder="Name"></b-col>
          <b-col sm="12" md="6"><input placeholder="Last name"></b-col>
          <b-col sm="12"><input placeholder="Email"></b-col>
          <b-col sm="12"><textarea placeholder="Message" rows="6"></textarea></b-col>
        </b-row>
      </b-container>
      <button class="[ button_form ]"><p class="[ buttom_form-text ]">SEND</p></button>
    </form>

  </div>
</template>

<script>
export default {
  name: 'HomeForm',
}
</script>

<style lang="scss" scoped>
@import '@/styles/main.scss';



</style>
