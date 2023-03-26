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
        <label for="title">Title</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="title"
          v-model="title"
          outlined
          dense
          placeholder="Title"
          hide-details
        ></v-text-field>
      </v-col>

       <v-col
        cols="12"
        md="3"
      >
        <label for="slug">Slug</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="Slug"
          v-model="slug"
          outlined
          dense
          placeholder="slug"
          hide-details
        ></v-text-field>
      </v-col>

       <v-col
        cols="12"
        md="3"
      >
        <label for="certification">certification</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="certification"
          v-model="certification"
          outlined
          dense
          placeholder="certification"
          hide-details
        ></v-text-field>
      </v-col>

       <v-col
        cols="12"
        md="3"
      >
        <label for="price">Price</label>
      </v-col>

      <v-col
        cols="12"
        md="9"
      >
        <v-text-field
          id="price"
          v-model="price"
          type="number"
          outlined
          dense
          placeholder="price"
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
    const name = ref('')
    const title = ref('')
    const slug = ref('')
    const certification = ref('')
    const price = ref('')



    
   

    return {
      name,
      title,
      slug,
      certification,
      price,
    }
  },
}
</script>
