<template>
  <v-simple-table>
    <template v-slot:default>
      <thead>
        <tr>
          <th class="text-center text-uppercase">pages</th>
        </tr>
        <tr>
          <th class="text-center text-uppercase">ID</th>
          <th class="text-center text-uppercase">Title</th>
          <th class="text-center text-uppercase">Status</th>
          <th class="text-center text-uppercase">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(page,index) in pages" :key="index">
          <td class="text-center">
            {{ page.ID }}
          </td>
          <td class="text-center">
            {{ page.Title }}
          </td>
          <td class="text-center">
            {{ page.status }}
          </td>
          <td class="text-center">
            {{ page.action }}
          </td>
        </tr>
      </tbody>
    </template>
  </v-simple-table>
</template>

<script>
import axios from 'axios'
export default {
  name:"pages",
    data(){
        return {
            pages:[]
        }
    },
  mounted() {
    this.getPages()
  },
  methods: {
     async getPages(){
            await axios.get('/api/pages').then(response=>{
                this.pages = response.data
            }).catch(error=>{
                console.log(error)
                this.pages = []
            })
        .catch(function (error) {
          currentObj.output = error
        })
    },
  },
 
}
</script>
