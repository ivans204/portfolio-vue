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
    name: 'puturopolje',
    component: () => import(/* webpackChunkName: "about" */ '../views/PUTuropolje.vue')
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
