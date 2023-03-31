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
      
        <tr  v-for="(category,index) in categories" :key="index">
          <td class="text-center">{{ category.name }}</td>
          <td class="text-center">{{ category.quantity }}</td>
          <td class="text-center">{{ category.action }}
            <button @click="deleteCategory(category.id)">DELETE</button>
          <button @click="editCategory(category.id)">EDIT</button>
          </td>
         </tr>
       
    </tbody>
    </template>
  </v-simple-table>


</template>

<script>
import axios from 'axios';
export default {

   name:"categories",
    data(){
        return {
            categories:[]
        }
    },
    mounted() {
    this.getCategories()
  },
  methods: {
    async getCategories() {
      await axios
        .get('/api/categories')
        .then(response => {
          this.categories = response.data
        })
        .catch(error => {
          console.log(error)
          this.categories = []
        })
        .catch(function (error) {
          currentObj.output = error
        })
    },
  },
}
</script>

