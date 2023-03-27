require("./src/main");
window.Vue = require('vue');

import App from './src/App.vue';
import Vue from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import { routes } from './routes';

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

Vue.component('user-component', require('./components/UserComponent.vue').default);
Vue.component('example-component', require('./components/ExampleComponent.vue'));

const router = new VueRouter({
  mode: 'history',
  routes: routes
});

const app = new Vue({
  el: '#app',
  router: router,
  render: h => h(App),
  methods: {
    getUsers() {
      axios.get('/api/users')
        .then(response => {
          console.log(response.data);
        })
        .catch(error => {
          console.log(error);
        });
    }
  },
  mounted() {
    this.getUsers();
  }
});

export default app;


