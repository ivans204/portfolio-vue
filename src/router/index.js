import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/projects',
    name: 'Projects',
    component: () => import(/* webpackChunkName: "about" */ '../views/Projects.vue')
  },
  {
    path: '/puturopolje',
    name: 'Puturopolje',
    component: () => import(/* webpackChunkName: "about" */ '../views/PUTuropolje.vue')
  },
  {
    path: '/contact',
    name: 'Contact',
    component: () => import(/* webpackChunkName: "about" */ '../views/Contact.vue')
  },
  {
    path: '/thanks',
    name: 'Thanks',
    component: () => import(/* webpackChunkName: "about" */ '../views/Thanks.vue')
  },
  {
    path: '*',
    component: Home,
  }
]

const router = new VueRouter({
  routes,
  mode: 'history'
})

export default router
