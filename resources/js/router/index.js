import VueRouter from 'vue-router';

import About from '../components/About.vue'
import Employee from '../views/Employee.vue'
import Allowances from '../views/Allowances.vue'
import Deductions from '../views/Deductions.vue'
import Home from '../views/Home.vue'
const routes = [
    {
      path: '/',
      component: Home,
      name: 'Home'
    },
    {
       path: '/employee',
      component: Employee,
       name: 'Employee'
   },
   {
    path: '/allowances',
   component: Allowances,
    name: 'Allowances'
},
{
    path: '/deductions',
   component: Deductions,
    name: 'Deductions'
},
  ]
const router = new VueRouter({
  mode: 'history',
  routes
})

export default router;
