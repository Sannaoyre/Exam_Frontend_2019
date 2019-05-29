import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import Projects from './views/Projects.vue'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/projects',
      name: 'projects',
      component: Projects
    },
    {
      path: '/about',
      name: 'about',
      component: Home
    },
    {
      path: '/contact',
      name: 'contact',
      component: Home
    },
    {
      path: '/films',
      name: 'films',
      component: Projects
    },
    {
      path: '/graphics',
      name: 'graphics',
      component: Projects
    }
  ]
})
