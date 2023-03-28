<template>

  <v-simple-table>
    <template v-slot:default>
      <thead> 
      <tr>
    <th class="text-center text-uppercase">Categories</th> </tr>
    <tr> <th class="text-center text-uppercase">Name</th>
    <th class="text-center text-uppercase">Quantity</th>
    <th class="text-center text-uppercase"> Action</th>
      </tr>
      </thead>
      <tbody>
      
        <tr v-for="item in categories":key="item.category">
          <td class="text-center">{{ item.name }}</td>
          <td class="text-center">{{ item.quantity }}</td>
          <td class="text-center">{{ item.action }}</td>
          
          <td class="text-center">
           <button>DELETE</button>   
           <button>edit</button>
          </td>
         </tr>
        <tr v-for="item in category" v-bind:key="item.id">
            {{ category.name }}
            {{ category.quantity }}
            {{ category.action }}
        </tr>
    </tbody>
    </template>
  </v-simple-table>


</template>

<script>
import axios from 'axios';
export default {

   mounted(){
  this.getCategories()
  },
  methods: {
            getCategories() {
              
                let currentObj = this;
                axios.get('/categories', {
                   
                })
                .then(function (response) {
                    this.categories = response.data;
                })
                .catch(function (error) {
                    currentObj.output = error;
                });
            }

  },



  setup() {
    const categories = [

      /*
      {
      
        name: 'CISCO',
        quantity: 6,
        
      },
      {
       
        name: 'Micrsoft',
        quantity: 6,
        
      },
      {
  
        name: 'ORACLE',
        quantity: 6,
        
      },
      {
        name: 'IBM',
        quantity: 6,
        
      },
      {
        
        name: 'SAP',
        quantity: 6,
       
      },
      */
    ]

    return {
      categories,
    }
  },
}
</script>

