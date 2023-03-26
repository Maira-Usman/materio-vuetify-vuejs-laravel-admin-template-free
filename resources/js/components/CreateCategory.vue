<template>
    <div>
        <h3 class="text-center">Create Category</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addCategory">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="category.name">
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" class="form-control" v-model="category.quantity">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="text" class="form-control" v-model="category.image">
                    </div>
                    <div class="form-group">
                        <label>status</label>
                        <input type="text" class="form-control" v-model="category.status">
                    </div>
                    <div class="form-group">
                        <label>action</label>
                        <input type="text" class="form-control" v-model="category.action">
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                category: {}
            }
        },
        methods: {
            addCategory() {
                this.axios
                    .post('http://localhost:8000/api/Categories', this.category)
                    .then(response => (
                        this.$router.push({ name: 'home' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>