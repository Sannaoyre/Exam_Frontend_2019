<template>
  <div class="[ gradientBox ]">
    <div class="[ titleBlack ]">
      <h1 class="[ titleBlack_font ]">Get in touch</h1>
      <h2 class="[ titleBlack_font-light ]">CONTACT</h2>
    </div>

    <form @submit="checkForm" action="send.php" method="post">
      <b-container fluid>
        <b-row>

          <b-col sm="12" md="6">
            <p>
                <input type="text" name="name" id="name" v-model="name" placeholder="Name" v-on:blur="checkName()">
                <span class="[ error ]" v-if="nameError">{{ nameError }}</span>
            </p>
          </b-col>

          <b-col sm="12" md="6">
            <p>
                <input type="text" name="lastName" id="lastName" v-model="lastName" placeholder="Last name" v-on:blur="checkLastname()">
                <span class="[ error ]" v-if="lastNameError">{{ lastNameError }}</span>
            </p>
          </b-col>

          <b-col sm="12">
            <p>
                <input type="text" name="email" id="email" v-model="email" placeholder="Email" v-on:blur="checkEmail()">
                <span class="[ error ]" v-if="emailError">{{ emailError }}</span>
            </p>
          </b-col>

          <b-col sm="12">
            <p>
                <textarea type="text" name="message" id="message" v-model="message" placeholder="Message" rows="6" v-on:blur="checkMessage()"></textarea>
                <span class="[ error ]" v-if="messageError">{{ messageError }}</span>
            </p>
          </b-col>

        </b-row>
      </b-container>

      <button class="[ button_form ]" type="submit" value="submit">
        <p>SEND</p>
      </button>

    </form>


  </div>
</template>




<script>
export default {
  name: 'HomeForm',
  data(){
    return{
    nameError: null,
    lastNameError: null,
    emailError: null,
    messageError: null,
    name: null,
    lastName: null,
    email: null,
    message: null,
  }
  },


 methods: {
   checkForm:function(e) {
     var a = this.checkName();
     var b = this.checkLastname();
     var c = this.checkEmail();
     var d = this.checkMessage();
     if (a&&b&&c&&d) return true;
     e.preventDefault();
   },

   checkName() {
     this.nameError = "";
       if(!this.name) {
         this.nameError = "Name required.";
         return false;
       } else {
         return true;
      }
   },

  checkLastname(){
    this.lastNameError = "";
      if(!this.lastName) {
        this.lastNameError = "Last name required.";
        return false;
      } else {
        return true;
      }
  },

  checkEmail(){
   const emailExp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))/g;
    this.emailError = "";
    if(!emailExp.test(this.email)){
      this.emailError ="Please fill in a valid email address";
      return false;
    } else {
      return true;
    }
  },


  checkMessage(){
    this.messageError = "";
      if(!this.message) {
        this.messageError = "A message is required.";
        return false;
      } else {
        return true;
      }
    },
  }
}
</script>

<style lang="scss" scoped>
@import '@/styles/main.scss';

span{
  position: absolute;
  margin-left: 2%;
}

</style>
