<template>

  <v-simple-table>
    <template v-slot:default>
      <thead>
        <tr>
          <th class="text-center text-uppercase">
            pages
          </th>
        </tr>
          <tr>
          <th class="text-center text-uppercase">
            ID
          </th>
          <th class="text-center text-uppercase">
            Title
          </th>
          <th class="text-center text-uppercase">
            Status
          </th>
          <th class="text-center text-uppercase">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
      
        <tr
          v-for="item in pages"
          :key="item.page"
        >

          <td class="text-center">
            {{ item.ID }}
          </td>
          <td class="text-center">
            {{ item.Title }}
          </td>
          <td class="text-center">
            {{ item.status }}
          </td>
          <td class="text-center">
            {{ item.action }}
          </td>
        </tr>
      </tbody>
    </template>
  </v-simple-table>
</template>

<script>
import axios from 'axios'

export default {

   mounted(){
  this.getPages()
  },
  methods: {
            getPages() {
              
                let currentObj = this;
                axios.get('/pages', {
                   
                })
                .then(function (response) {
                    this.pages = response.data;
                })
                .catch(function (error) {
                    currentObj.output = error;
                });
            }

  },
  setup() {
    const pages = [
      /*
      {
      
        ID: 2,
        Title: 'FAQ',
        
      },
      {
       
        ID: 3,
        Title: 'About US',
        
      },
      {
  
        ID: 4,
        Title: 'Guarantee',
        
      },
      {
        ID: 5,
        Title: 'Contact US',     
      },
      {
        
        ID: 6,
        Title: 'Disclaimer',
       
      },
      */
    ]

    return {
      pages,
    }
  },
}
</script>