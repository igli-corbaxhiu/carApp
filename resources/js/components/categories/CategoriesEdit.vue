<template>
    <div>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateCategory">
                    <div class="form-group">
                        <label>Name: </label>
                        <input type="text" class="form-control border-2" v-model="category.name">
                    </div>
                    <button type="submit" class="border-2 bg-gray-200 p-2 m-2">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "CategoriesEdit",
    data() {
        return {
            category: {},
        }
    },
    created() {
        this.getCategory();
    },
    methods: {
        updateCategory() {
            axios.patch(`/categories/${this.$route.params.id}`, this.category)
                .then((response) => {
                    this.$router.push({ name: 'dashboard' });
                });
        },
        getCategory() {
            axios.get(`/categories/${this.$route.params.id}`).then(response => {
                this.category = response.data;
            });
        },
    }
}
</script>

<style scoped>

</style>
