import '@/plugins/vue-composition-api'
import '@resources/sass/styles/styles.scss'
import Vue from 'vue'
import VueAxios from 'vue-axios'

import App from './App.vue'
import vuetify from './plugins/vuetify'
import router from './router'
import store from './store'

Vue.config.productionTip = false


new Vue({
  router,
  store,
  vuetify,
  el: '#app',
  render: h => h(App),
}).$mount('#app')


