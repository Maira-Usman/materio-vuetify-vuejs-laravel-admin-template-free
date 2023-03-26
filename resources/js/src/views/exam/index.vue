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
      <tbody>
      
        <tr
          v-for="item in Exams"
          :key="item.user"
        >

          <td class="text-center">
            {{ item.name }}
          </td>
          <td class="text-center">
            {{ item.Title }}
          </td>
          <td class="text-center">
            {{ item.Slug }}
          </td>
          <td class="text-center">
            {{ item.Certification }}
          </td>
          <td class="text-center">
            {{ item.Price }}
          </td>
          <td class="text-center">
            {{ item.Action }}
          </td>
        </tr>
      </tbody>
    </template>
  </v-simple-table>
</template>

<script>
export default {

  mounted(){
  this.getExams() 
  },
  methods: {
            getExams() {
              
                let currentObj = this;
                axios.get('/exams', {
                   
                })
                .then(function (response) {
                    this.exams = response.data;
                })
                .catch(function (error) {
                    currentObj.output = error;
                });
            }

  },


  setup() {
    const Exams = [

    
    /*
      {

      
        name: 'Ali',
        Title: 'False',
        Slug: 'Male',
        Certification: 'ABC1lahore',
        Price: 'Lahore',
       ]
        

        
      },
      {
       name: 'Ali',
        Title: 'False',
        Slug: 'Male',
        Certification: 'ABC1lahore',
        Price: 'Lahore',
      
        
      },
      {
  
        name: 'Ali',
        Title: 'False',
        Slug: 'Male',
        Certification: 'ABC1lahore',
        Price: 'Lahore',
       ]
        
      },
      {
        name: 'Ayesha',
        Title: 'False',
        Slug: 'True',
        Certification: '3344ADClahore',
        Price: 'Lahore',
        ]
        
        
      },
      {
        
        name: 'Ahmed',
        Title: 'False',
        Slug: 'Male',
        Certification: 'ABC44ISL',
        Price: 'Islamabad',
       
        
       
      },
      */
    
    ]

    return {
      Exams,
    }
  },
}
</script>