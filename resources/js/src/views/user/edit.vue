<template>
  <v-form>
    <v-row>
      <v-col
        cols="12"
        md="3"
      >
        <label for="name">Name</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="name"
          v-model="name"
          outlined
          dense
          placeholder="Name"
          hide-details
        ></v-text-field>
      </v-col>

      <v-col
        cols="12"
        md="3"
      >
        <label for="name">Address</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="address"
          v-model="address"
          outlined
          dense
          placeholder="address"
          hide-details
        ></v-text-field>
      </v-col>

      <v-col
        cols="12"
        md="3"
      >
        <label for="gender">Gender</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="gender"
          v-model="gender"
          outlined
          dense
          placeholder="gender"
          hide-details
        ></v-text-field>
      </v-col>

<v-col
        cols="12"
        md="3"
      >
        <label for="city">City</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="city"
          v-model="city"
          outlined
          dense
          placeholder="City"
          hide-details
        ></v-text-field>
      </v-col>

      <v-col
        cols="12"
        md="3"
      >
        <label for="state">State</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="state"
          v-model="state"
          outlined
          dense
          placeholder="State"
          hide-details
        ></v-text-field>
      </v-col>

      <v-col
        cols="12"
        md="3"
      >
        <label for="country">Country</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="country"
          v-model="country"
          outlined
          dense
          placeholder="Country"
          hide-details
        ></v-text-field>
      </v-col>

      <v-col
        cols="12"
        md="3"
      >
        <label for="zip">ZIP</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="zip"
          v-model="zip"
          type="number"
          outlined
          dense
          placeholder="ZIP"
          hide-details
        ></v-text-field>
      </v-col>

      <v-col
        cols="12"
        md="3"
      >
        <label for="VAT">VAT</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="vat"
          v-model="vat"
          type="number"
          outlined
          dense
          placeholder="VAT"
          hide-details
        ></v-text-field>
      </v-col>
      <v-col
        cols="12"
        md="3"
      >
        <label for="email">Email</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="email"
          v-model="email"
          outlined
          dense
          placeholder="Email"
          hide-details
        ></v-text-field>
      </v-col>

      <v-col
        cols="12"
        md="3"
      >
        <label for="mobile">Mobile</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="mobile"
          v-model="mobile"
          type="number"
          outlined
          dense
          placeholder="Number"
          hide-details
        ></v-text-field>
      </v-col>

      <v-col
        cols="12"
        md="3"
      >
        <label for="Phone">Phone</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="phone"
          v-model="phone"
          type="number"
          outlined
          dense
          placeholder="Phone"
          hide-details
        ></v-text-field>
      </v-col>

      <v-col
        offset-md="3"
        cols="12"
      >
        <v-checkbox
          v-model="checkbox"
          label="Admin?"
          class="mt-0"
          hide-details
        ></v-checkbox>
      </v-col>

      <v-col
        offset-md="3"
        cols="12"
      >
        <v-btn color="primary">
          update
        </v-btn>
        <v-btn
          type="reset"
          class="mx-2"
          outlined
        >
          Reset
        </v-btn>
      </v-col>
    </v-row>
  </v-form>
</template>

<script>
import { ref } from '@vue/composition-api'

export default {
  setup() {
    const name = ref('')
    const email = ref('')
    const mobile = ref()
    const address = ref()
    const admin = ref()
    const gender = ref()
    const phone = ref()
    const vat = ref()
    const zip = ref()
    const country = ref()
    const state = ref()
    const city = ref()
    const checkbox = ref(false)

    return {
      name,
      email,
      mobile,
      address,
      country,
      city,
      state,
      gender,
      admin,
      checkbox,
      phone,
      vat,
      zip,
      checkbox,
    }
  },
}
</script>
