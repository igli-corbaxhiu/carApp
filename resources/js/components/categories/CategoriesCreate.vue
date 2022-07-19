<template>
    <form class="flex flex-col w-full mt-2" @submit.prevent="submit">
        <div>
            <label class="text-sm" for="name">Category Name:</label>
            <input class="text-md border-2 bg-white" type="text" id="name" name="name" v-model="category.name" required>
        </div>
        <div>
            <button class="border-2 bg-slate-300 p-2 rounded mt-2" type="submit">Submit</button>
        </div>
    </form>
</template>

<script>
import axios from 'axios';

export default {
    name: "CategoriesCreate",
    data() {
        return {
            category: {},
        }
    },
    methods: {
        submit() {
            axios.post('/categories', this.category).then(response => {
                this.category = {};
            });
        }
    },
}
</script>

<style scoped>

</style>
