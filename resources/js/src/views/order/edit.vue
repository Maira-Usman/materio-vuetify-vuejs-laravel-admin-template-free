<template>
  <v-form>
    <v-row>
      <v-col
        cols="12"
        md="3"
      >
        <label for="customer">Customer</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="customer"
          v-model="customer"
          outlined
          dense
          placeholder="Customer"
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
        <label for="mobile">Total Earning</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="total_earning"
          v-model="total_earning"
          type="number"
          outlined
          dense
          placeholder="Total Earning"
          hide-details
        ></v-text-field>
      </v-col>

      <v-col
        cols="12"
        md="3"
      >
        <label for="exam_code">Exam Code</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="exam_code"
          v-model="exam_code"
          type="text"
          outlined
          dense
          placeholder="Exam Code"
          hide-details
        ></v-text-field>
      </v-col>

      <v-col
        cols="12"
        md="3"
      >
        <label for="exams">Exams</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="exams"
          v-model="exams"
          outlined
          dense
          placeholder="Exams"
          hide-details
        ></v-text-field>
      </v-col>

      <v-col
        cols="12"
        md="3"
      >
        <label for="date">Date</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="date"
          v-model="date"
          type="date"
          outlined
          dense
          placeholder="Date"
          hide-details
        ></v-text-field>
      </v-col>

        <v-col
        cols="12"
        md="3"
      >
        <label for="coupon">Coupon</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="coupon"
          v-model="coupon"
          outlined
          dense
          placeholder="Coupon"
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
    const customer = ref('')
    const email = ref('')
    const total_earning = ref()
    const exam_code = ref()
    const exams = ref() 
    const date = ref()
    const coupon = ref()
  

    return {
      customer,
      email,
      total_earning,
      exam_code,
      exams,
      date,
      coupon,
      
    }
  },
}
</script>
