<template>

  <v-simple-table>
    <template v-slot:default>
      <thead>
        <tr>
          <th class="text-center text-uppercase">
            users
          </th>
        </tr>
          <tr>
          <th class="text-center text-uppercase">
            Name
          </th>
           <th class="text-center text-uppercase">
            Is Admin
          </th>
           <th class="text-center text-uppercase">
            Gender
          </th>
           <th class="text-center text-uppercase">
            Address
          </th>
           <th class="text-center text-uppercase">
            City
          </th>
           <th class="text-center text-uppercase">
            State
          </th>
           <th class="text-center text-uppercase">
            Country
          </th>
           <th class="text-center text-uppercase">
            ZIP
          </th>
           <th class="text-center text-uppercase">
            VAT
          </th>
          <th class="text-center text-uppercase">
            Mobile
          </th>
          <th class="text-center text-uppercase">
            Phone
          </th>
          <th class="text-center text-uppercase">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
      
        <tr
          v-for="item in users"
          :key="item.user"
        >

          <td class="text-center">
            {{ item.name }}
          </td>
          <td class="text-center">
            {{ item.IsAdmin }}
          </td>
          <td class="text-center">
            {{ item.Gender }}
          </td>
          <td class="text-center">
            {{ item.Address }}
          </td>
          <td class="text-center">
            {{ item.City }}
          </td>
          <td class="text-center">
            {{ item.State }}
          </td>
          <td class="text-center">
            {{ item.Country }}
          </td>
          <td class="text-center">
            {{ item.ZIP }}
          </td>
          <td class="text-center">
            {{ item.VAT }}
          </td>
          <td class="text-center">
            {{ item.Mobile }}
          </td>
          <td class="text-center">
            {{ item.Phone }}
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
  this.getUsers() 
  },
  methods: {
            getUsers() {
              
                let currentObj = this;
                axios.get('/users', {
                   
                })
                .then(function (response) {
                    this.users = response.data;
                })
                .catch(function (error) {
                    currentObj.output = error;
                });
            }

  },


  setup() {
    const users = [

    /*
    
      {

      
        name: 'Ali',
        IsAdmin: 'False',
        Gender: 'Male',
        Address: 'ABC1lahore',
        City: 'Lahore',
        State: 'Lahore',
        Country: 'Pakistan',
        ZIP: 334455,
        VAT: 55688,
        Phone: 11223344,
        Mobile: 'Nokia',
        

        
      },
      {
       name: 'Ali',
        IsAdmin: 'False',
        Gender: 'Male',
        Address: 'ABC1lahore',
        City: 'Lahore',
       State: 'Lahore',
        Country: 'Pakistan',
        ZIP: 334455,
        VAT: 55688,
        Phone: 11223344,
        Mobile: 'Nokia',
        
      },
      {
  
        name: 'Ali',
        IsAdmin: 'False',
        Gender: 'Male',
        Address: 'ABC1lahore',
        City: 'Lahore',
        State: 'Lahore',
        Country: 'Pakistan',
        ZIP: 334455,
        VAT: 55688,
        Phone: 11223344,
        Mobile: 'Nokia',
        
        
      },
      {
        name: 'Ayesha',
        IsAdmin: 'False',
        Gender: 'True',
        Address: '3344ADClahore',
        City: 'Lahore',
        State: 'Lahore',
        Country: 'Pakistan',
        ZIP: 2288995,
        VAT: 4455998,
        Phone: 11223344,
        Mobile: 'Nokia',
        
        
      },
      {
        
        name: 'Ahmed',
        IsAdmin: 'False',
        Gender: 'Male',
        Address: 'ABC44ISL',
        City: 'Islamabad',
        State: 'Islamabad',
        Country: 'Pakistan',
        ZIP: 337755,
        VAT: 55778,
        Phone: 1188993344,
        Mobile: 'Nokia',
        
       
      },
      */
      
    
    ]

    return {
      users,
    }
  },
}
</script>