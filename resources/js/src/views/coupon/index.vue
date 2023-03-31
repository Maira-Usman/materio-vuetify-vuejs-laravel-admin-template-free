<template>
  <v-simple-table>
    <template v-slot:default>
      <thead>
        <tr>
          <th class="text-center text-uppercase">coupons</th>
        </tr>
        <tr>
          <th class="text-center text-uppercase">Code</th>
          <th class="text-center text-uppercase">Discount</th>
        </tr>
      </thead>
      <tbody>
        <tr  v-for="(coupon,index) in coupons" :key="index">
          <td class="text-center">
            {{ coupon.code }}
          </td>
          <td class="text-center">
            {{ coupon.discount }}
          </td>
        </tr>
      </tbody>
    </template>
  </v-simple-table>
</template>

<script>
import axios from 'axios'
export default {

  name:"coupons",
    data(){
        return {
            coupons:[]
        }
    },
  mounted() {
    this.getCoupons()
  },
  methods: {
    async getCoupons() {
      await axios
        .get('/api/coupons')
        .then(response => {
          this.coupon = response.data
        })
        .catch(error => {
          console.log(error)
          this.coupon = []
        })
        .catch(function (error) {
          currentObj.output = error
        })
    },
  },
}
</script>
