import Vue from 'vue'
import Router from 'vue-router'
import BookstoreAdmin from '@/components/BookstoreAdmin'
import 'bootstrap/dist/css/bootstrap.min.css'
// import "bootstrap"

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'BookstoreAdmin',
      component: BookstoreAdmin
    }
  ]
})
