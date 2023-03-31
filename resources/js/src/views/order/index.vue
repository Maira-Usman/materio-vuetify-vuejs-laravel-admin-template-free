<template>
  <v-simple-table>
    <template v-slot:default>
      <thead>
        <tr>
          <th class="text-center text-uppercase">orders</th>
        </tr>
        <tr>
          <th class="text-center text-uppercase">ID</th>
          <th class="text-center text-uppercase">Customer</th>
          <th class="text-center text-uppercase">Email</th>
          <th class="text-center text-uppercase">Total Earning</th>
          <th class="text-center text-uppercase">Exam Code</th>
          <th class="text-center text-uppercase">Exams</th>
          <th class="text-center text-uppercase">Date</th>
          <th class="text-center text-uppercase">order</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(order,index) in orders" :key="index">
          <td class="text-center">
            {{ order.ID }}
          </td>
          <td class="text-center">
            {{ order.Customer }}
          </td>
          <td class="text-center">
            {{ order.Email }}
          </td>
          <td class="text-center">
            {{ order.TotalEarning }}
          </td>
          <td class="text-center">
            {{ order.ExamCode }}
          </td>
          <td class="text-center">
            {{ order.Exams }}
          </td>
          <td class="text-center">
            {{ order.Date }}
          </td>
          <td class="text-center">
            {{ order.order }}
            <button @click="deleteOrder(order.id)">DELETE</button>
          <button @click="editOrder(order.id)">EDIT</button>
          </td>
          </td>
        </tr>
      </tbody>
    </template>
  </v-simple-table>
</template>

<script>
import axios from 'axios'
export default {

  name:"orders",
    data(){
        return {
            orders:[]
        }
    },
    mounted(){
        this.getOrders()
    },
    methods:{
         getOrders(){
             axios.get('/api/orders').then(response=>{
                this.orders = response.data
            }).catch(error=>{
                console.log(error)
                this.orders = []
            })
        .catch(function (error) {
          currentObj.output = error
        })
    },
  },


}
</script>
