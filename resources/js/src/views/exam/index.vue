<template>

  <v-simple-table>
    <template v-slot:default>
      <thead>
        <tr>
          <th class="text-center text-uppercase">
            Exams
          </th>
        </tr>
          <tr>
          <th class="text-center text-uppercase">
            Name
          </th>
           <th class="text-center text-uppercase">
            Title
          </th>
           <th class="text-center text-uppercase">
            Slug
          </th>
           <th class="text-center text-uppercase">
            Certificaion
          </th>
           <th class="text-center text-uppercase">
            Price
          </th>
          <th class="text-center text-uppercase">
            Action
          </th>
        </tr>
      </thead>
      <tbody >
      
        <tr
          v-for="(exam,index) in exams" :key="index">
          <td class="text-center">
            {{ exam.name }}
          </td>
          <td class="text-center">
            {{ exam.Title }}
          </td>
          <td class="text-center">
            {{ exam.Slug }}
          </td>
          <td class="text-center">
            {{ exam.Certification }}
          </td>
          <td class="text-center">
            {{ exam.Price }}
          </td>
          <td class="text-center">
            {{ exam.Action }}
          </td>
        </tr>
      </tbody>
    </template>
  </v-simple-table>
</template>

<script>
import axios from 'axios'
export default {
name:"exams",
    data(){
        return {
            exams:[]
        }
    },
    mounted(){
        this.getExams()
    },
    methods:{
        async getExams(){
            await axios.get('/api/exams').then(response=>{
                this.exams = response.data
            }).catch(error=>{
                console.log(error)
                this.exams = []
            })
                .catch(function (error) {
                    currentObj.output = error;
                });
            }

  },

}
</script>