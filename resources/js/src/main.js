import '@/plugins/vue-composition-api'
import '@resources/sass/styles/styles.scss'
import axios from 'axios'
import Vue from 'vue'
import VueAxios from 'vue-axios'
import App from './App.vue'
import vuetify from './plugins/vuetify'
import router from './router'
import store from './store'

Vue.config.productionTip = false


new Vue({
  el: '#app',
  router,
  store,
  vuetify,
  render: h => h(App),
}).$mount('#app')


