<template>
  <v-form>
    <v-row>
      <v-col
        cols="12"
        md="3"
      >
        <label for="code">Code</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="code"
          v-model="code"
          outlined
          dense
          placeholder="Code"
          hide-details
        ></v-text-field>
      </v-col>

     
      <v-col
        cols="12"
        md="3"
      >
        <label for="discount">Discount</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="discount"
          v-model="discount"
          type="number"
          outlined
          dense
          placeholder="Discount"
          hide-details
        ></v-text-field>
      </v-col>



      <v-col
        offset-md="3"
        cols="12"
      >
        <v-btn color="primary">
          Update
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
    const code = ref('')
    const discount = ref()
  
    return {
      code,
      discount,
     
    }
  },
}
</script>
