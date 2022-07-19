<template>
   <div v-if="editing" @submit.prevent="updateCategory">
       <CategoryForm button-name="Update"></CategoryForm>
   </div>
    <div v-else @submit.prevent="submit">
        <CategoryForm button-name="Create"></CategoryForm>
    </div>


<!--    <form class="flex flex-col w-full mt-2" v-if="editing" @submit.prevent="updateCategory">-->
<!--    <form class="flex flex-col w-full mt-2" v-else @submit.prevent="submit">-->

<!--        <div>-->
<!--            <label class="text-sm" for="name">Category Name:</label>-->
<!--            <input class="text-md border-2 bg-white" type="text" id="name" name="name" v-model="category.name" required>-->
<!--        </div>-->
<!--        <div>-->
<!--            <button class="border-2 bg-slate-300 p-2 rounded mt-2" type="submit">Submit</button>-->
<!--        </div>-->
<!--    </form>-->

</template>

<script>
import axios from "axios";
import CategoryForm from "./CategoryForm";

export default {
    name: "CreateEditCategory",
    components: {CategoryForm},
    data() {
        return {
            category: {},
            editing: false
        }
    },
    methods: {
        submit() {
            axios.post('/categories', this.category).then(response => {
                this.category = {};
            });
        },
        updateCategory() {
            axios.patch(`/categories/${this.$route.params.id}`, this.category)
                .then((response) => {
                    this.$router.push({ name: 'dashboard' });
                });
        },
    },
    created() {
        if(this.category) {
            this.editing = true;
        }
    }
}
</script>

<style scoped>

</style>
