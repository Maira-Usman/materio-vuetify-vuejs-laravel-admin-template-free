<template>

    <div>
        <h2 class="text-center">Categories</h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Image</th>
                <th>Status</th>
                <th>Action</th>
                <!-- <th>Actions</th> -->
            </tr>
            </thead>
            <tbody>
            <tr v-for="category in categories" :key="category.id">
                <td>{{ category.id }}</td>
                <td>{{ category.name }}</td>
                <td>{{ category.quantity }}</td>
                <td>{{ category.image }}</td>
                <td>{{ category.status }}</td>
                <td>{{ category.action }}</td>



                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: category.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deletecategory(category.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                categories: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/categories/')
                .then(response => {
                    this.categories = response.data;
                });
        },
        methods: {
            deletecategory(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/categories/${id}`)
                    .then(response => {
                        let i = this.categories.map(data => data.id).indexOf(id);
                        this.categories.splice(i, 1)
                    });
            }
        }
    }
</script> 