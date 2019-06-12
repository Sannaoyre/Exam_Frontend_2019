import Vue from 'vue'
import App from './App.vue'
import router from './router'
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import VueScrollReveal from 'vue-scroll-reveal';
import { directive as onClickOutside } from 'vue-on-click-outside'
//import VueScrollTo from 'vue-scrollto'

//Vue.use(VueScrollTo)
Vue.directive('on-click-outside', onClickOutside)
Vue.use(VueScrollReveal);
Vue.use(BootstrapVue)
Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
