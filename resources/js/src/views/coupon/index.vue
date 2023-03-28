<template>

  <v-simple-table>
    <template v-slot:default>
      <thead>
        <tr>
          <th class="text-center text-uppercase">
            coupons
          </th>
        </tr>
          <tr>
          <th class="text-center text-uppercase">
            Code
          </th>
          <th class="text-center text-uppercase">
            Discount
          </th>
        </tr>
      </thead>
      <tbody>
      
        <tr
          v-for="item in coupons"
          :key="item.coupon"
        >

          <td class="text-center">
            {{ item.code }}
          </td>
          <td class="text-center">
            {{ item.discount }}
          </td>
        </tr>
      </tbody>
    </template>
  </v-simple-table>
</template>

<script>
import axios from 'axios';
export default {
       mounted(){
  this.getCoupons()
  },
  methods: {
            getCoupons() {
              
                let currentObj = this;
                axios.get('/coupons', {
                   
                })
                .then(function (response) {
                    this.coupons = response.data;
                })
                .catch(function (error) {
                    currentObj.output = error;
                });
            }

  },


  setup() {
    const coupons = [

      /*
      {
      
        code: 'New Year',
        discount: '40%',
        
      },
      {
       
        code: 'New20',
        discount: '20%',
        
      },
      {
  
        code: 'Buy 1 Get 1 Free',
        discount: '0%',
        
      },
      {
        code: 'Christmas',
        discount: '20%',
        
      },
      {
        
        code: 'CHMS',
        discount: '20%',
       
      },
      */
    ]

    return {
      coupons,
    }
  },
}
</script>