<template>
  <v-simple-table>
    <template v-slot:default>
      <thead>
        <tr>
          <th class="text-center text-uppercase">users</th>
        </tr>
        <tr>
          <th class="text-center text-uppercase">Name</th>
          <th class="text-center text-uppercase">Is Admin</th>
          <th class="text-center text-uppercase">Gender</th>
          <th class="text-center text-uppercase">Address</th>
          <th class="text-center text-uppercase">City</th>
          <th class="text-center text-uppercase">State</th>
          <th class="text-center text-uppercase">Country</th>
          <th class="text-center text-uppercase">ZIP</th>
          <th class="text-center text-uppercase">VAT</th>
          <th class="text-center text-uppercase">Mobile</th>
          <th class="text-center text-uppercase">Phone</th>
          <th class="text-center text-uppercase">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(user, index) in users" :key="index">
          <td class="text-center">
            {{ user.name }}
          </td>
          <td class="text-center">
            {{ user.IsAdmin }}
          </td>
          <td class="text-center">
            {{ user.Gender }}
          </td>
          <td class="text-center">
            {{ user.Address }}
          </td>
          <td class="text-center">
            {{ user.City }}
          </td>
          <td class="text-center">
            {{ user.State }}
          </td>
          <td class="text-center">
            {{ user.Country }}
          </td>
          <td class="text-center">
            {{ user.ZIP }}
          </td>
          <td class="text-center">
            {{ user.VAT }}
          </td>
          <td class="text-center">
            {{ user.Mobile }}
          </td>
          <td class="text-center">
            {{ user.Phone }}
          </td>

          <td class="text-center">
            {{ user.Action }}
            <button @click="deleteUser(user.id)">DELETE</button>
            <button @click="editUser(user.id)">EDIT</button>
          </td>
        </tr>
      </tbody>
    </template>
  </v-simple-table>
</template>

<script>
import axios from 'axios'
export default {
  name: 'users',
  data() {
    return {
      users: [],
    }
  },
  mounted() {
    this.getUsers()
  },
  methods: {
    async getUsers() {
      await axios
        .get('/api/users')
        .then(response => {
          this.users = response.data
        })
        .catch(error => {
          console.log(error)
          this.users = []
        })
        .catch(function (error) {
          currentObj.output = error
        })
    },
  },
}
</script>
