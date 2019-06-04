<template>
  <div class="[ gradientBox ]">
    <div class="[ titleBlack ]">
      <h1 class="[ titleBlack_font ]">Get in touch</h1>
      <h2 class="[ titleBlack_font-light ]">CONTACT</h2>
    </div>

    <form>
      <b-container fluid id="contact">
        <b-row>

          <b-col sm="12" md="6">
            <input placeholder="Name" id="firstName" type="text" name="name" v-on:blur="validateName()">
              <span class="error" id="firstNameError">This field cannot be blank</span>
          </b-col>

          <b-col sm="12" md="6">
            <input placeholder="Last name" id="lastName" type="text" name="lastName" v-on:blur="validateLastname()">
            <span class="error" id="lastNameError">This field cannot be blank</span>
          </b-col>

          <b-col sm="12">
            <input placeholder="Email" id="email"  type="text" name="email" v-on:blur="validateEmail()">
            <span class="error" id="emailError">Please enter a correct email address</span>
          </b-col>

          <b-col sm="12">
            <textarea placeholder="Message" rows="6" id="message" type="text" name="message" v-on:blur="validateMessage()"></textarea>
            <span class="error" id="messageError">Please enter a message</span>
          </b-col>

        </b-row>
      </b-container>

      <button class="[ button_form ]" type="submit" value="submit" v-on:click="validateForm()">
        <p>SEND</p>
      </button>

    </form>


  </div>
</template>








<script>
export default {
  name: 'HomeForm',
  data() {
      return {
        input: {
        }
      };
  },
 methods: {
   validateName() {
   if (firstName.value === "") {
       document.getElementById("firstNameError").style.display = "block";
         return false;
       } else {
         document.getElementById("firstNameError").style.display = "none";
      }
      this.firstName = ''
   },

    validateLastname(){
      if (lastName.value === "" ) {
       document.getElementById("lastNameError").style.display = "block";
       return false;
      } else {
       document.getElementById("lastNameError").style.display = "none";
     }
  },

  validateEmail(){
    const emailExp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))/g;

    if (emailExp.test(email.value) ) {
      document.getElementById("emailError").style.display = "none";
    } else {
      document.getElementById("emailError").style.display = "block";
      return false;
    }
  },

  validateMessage(){
    if (message.value === "" ) {
     document.getElementById("messageError").style.display = "block";
     return false;
    } else {
     document.getElementById("messageError").style.display = "none";
   }
 },

  validateForm(){
    const app = this;
    app.validateName();
    app.validateLastname();
    app.validateEmail();
    app.validateMessage();
    }
  }
}
</script>

<style lang="scss" scoped>
@import '@/styles/main.scss';



</style>
