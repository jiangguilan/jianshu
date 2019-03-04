import Vue from 'vue'
import Router from 'vue-router'
import homePage from '@/components/home'
import signUpPage from '@/components/common/sign_up'
import signInPage from '@/components/common/sign_in'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'homePage',
      component: homePage
    },
    {
      path: '/sign_up',
      name: 'signUp',
      component: signUpPage
    },
    {
      path: '/sign_in',
      name: 'sigIn',
      component: signInPage
    }
  ]
})
