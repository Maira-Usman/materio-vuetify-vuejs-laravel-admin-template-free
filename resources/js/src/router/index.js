import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    redirect: 'dashboard',
  },
  {
    path: '/dashboard',
    name: 'dashboard',
    component: () => import('@/views/dashboard/Dashboard.vue'),
  },
  {
    path: '/typography',
    name: 'typography',
    component: () => import('@/views/typography/Typography.vue'),
  },
  {
    path: '/icons',
    name: 'icons',
    component: () => import('@/views/icons/Icons.vue'),
  },
  {
    path: '/cards',
    name: 'cards',
    component: () => import('@/views/cards/Card.vue'),
  },
  {
    path: '/simple-table',
    name: 'simple-table',
    component: () => import('@/views/simple-table/SimpleTable.vue'),
  },
  {
    path: '/form-layouts',
    name: 'form-layouts',
    component: () => import('@/views/form-layouts/FormLayouts.vue'),
  },
  {
    path: '/pages/account-settings',
    name: 'pages-account-settings',
    component: () => import('@/views/pages/account-settings/AccountSettings.vue'),
  },
  {
    path: '/pages/login',
    name: 'pages-login',
    component: () => import('@/views/pages/Login.vue'),
    meta: {
      layout: 'blank',
    },
  },
  {
    path: '/pages/register',
    name: 'pages-register',
    component: () => import('@/views/pages/Register.vue'),
    meta: {
      layout: 'blank',
    },
  },
  {
    path: '/category',
    name: 'category',
    component: () => import('@/views/category/index.vue'),
   
  },
  {
    path: '/category/edit',
    name: 'category',
    component: () => import('@/views/category/edit.vue'),
   
  },
  {
    path: '/user',
    name: 'user',
    component: () => import('@/views/user/index.vue'),
   
  },
  {
    path: '/user/edit',
    name: 'user',
    component: () => import('@/views/user/edit.vue'),
   
  },
  {
    path: '/order',
    name: 'order',
    component: () => import('@/views/order/index.vue'),
   
  },
  {
    path: '/order/edit',
    name: 'order',
    component: () => import('@/views/order/edit.vue'),
   
  },
  {
    path: '/page',
    name: 'page',
    component: () => import('@/views/page/index.vue'),
   
  },
  {
    path: '/page/edit',
    name: 'page',
    component: () => import('@/views/page/edit.vue'),
   
  },
  {
    path: '/coupon',
    name: 'coupon',
    component: () => import('@/views/coupon/index.vue'),
   
  },
  {
    path: '/coupon/edit',
    name: 'coupon',
    component: () => import('@/views/coupon/edit.vue'),
   
  },

  {
    path: '/exam',
    name: 'exam',
    component: () => import('@/views/exam/index.vue'),
   
  },
  {
    path: '/exam/edit',
    name: 'exam',
    component: () => import('@/views/exam/edit.vue'),
   
  },
  
  {
    path: '/error-404',
    name: 'error-404',
    component: () => import('@/views/Error.vue'),
    meta: {
      layout: 'blank',
    },
  },
  {
    path: '*',
    redirect: 'error-404',
  },
  
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes,
})

export default router
