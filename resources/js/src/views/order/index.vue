<template>

  <v-simple-table>
    <template v-slot:default>
      <thead>
        <tr>
          <th class="text-center text-uppercase">
            orders
          </th>
        </tr>
          <tr>
          <th class="text-center text-uppercase">
            ID
          </th>
          <th class="text-center text-uppercase">
            Customer
          </th>
          <th class="text-center text-uppercase">
            Email
          </th>
          <th class="text-center text-uppercase">
            Total Earning
          </th>
          <th class="text-center text-uppercase">
            Exam Code
          </th>
          <th class="text-center text-uppercase">
            Exams
          </th>
          <th class="text-center text-uppercase">
            Date
          </th>
          <th class="text-center text-uppercase">
            Coupon
          </th>
        </tr>
      </thead>
      <tbody>
      
        <tr
          v-for="item in orders"
          :key="item.order"
        >

          <td class="text-center">
            {{ item.ID }}
          </td>
          <td class="text-center">
            {{ item.Customer }}
          </td>
          <td class="text-center">
            {{ item.Email }}
          </td>
          <td class="text-center">
            {{ item.TotalEarning }}
          </td>
          <td class="text-center">
            {{ item.ExamCode }}
          </td>
          <td class="text-center">
            {{ item.Exams }}
          </td>
          <td class="text-center">
            {{ item.Date }}
          </td>
          <td class="text-center">
            {{ item.Coupon }}
          </td>
        </tr>
      </tbody>
    </template>
  </v-simple-table>
</template>

<script>
export default {

   mounted(){
  this.getCategories()
  },
  methods: {
            getOrders() {
              
                let currentObj = this;
                axios.get('/orders', {
                   
                })
                .then(function (response) {
                    this.orders = response.data;
                })
                .catch(function (error) {
                    currentObj.output = error;
                });
            }

  },

  setup() {
    const orders = [
      /*
      {
      
        ID,
        Customer,
        Email,
        TotalEarning,
        ExamCode,
        Exams,
        Date,
        Coupon,

        
      },
      {
       
         ID,
        Customer,
        Email,
        TotalEarning,
        ExamCode,
        Exams,
        Date,
        Coupon,
      },
      {
  
         ID,
        Customer,
        Email,
        TotalEarning,
        ExamCode,
        Exams,
        Date,
        Coupon,
      },
      {
         ID,
        Customer,
        Email,
        TotalEarning,
        ExamCode,
        Exams,
        Date,
        Coupon,
      },
      {
        
         ID,
        Customer,
        Email,
        TotalEarning,
        ExamCode,
        Exams,
        Date,
        Coupon,
      },
      */
    ]

    return {
      orders,
    }
  },
}
</script>