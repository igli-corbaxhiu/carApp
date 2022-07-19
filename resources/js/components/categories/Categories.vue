<template>
    <div>
        <h1 class="text-2xl text-center">Categories</h1>

        <br />

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center">
                        Category Id
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Category Name
                    </th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white
                even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700"
                    v-for="category in categories">
                    <td class="px-6 py-4 text-center">
                        {{ category.id }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        {{ category.name }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <router-link :to="{name: 'categories.edit', params: { id: category.id }}">Edit</router-link>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <button class="font-medium text-red-600 dark:text-blue-500 hover:underline"
                                @click="deleteCategory(category.id)">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import Cars from "../cars/Cars";

export default {
    name: "Categories",
    components: {
        Cars
    },
    data(){
        return{
            categories: [],
        }
    },
    methods: {
        getCategories() {
            axios.get('/categories').then(response => {
                this.categories = response.data;
            });
            console.log(this.categories);
        },
        deleteCategory(id) {
            axios.post(`/categories/${id}`, {
                _method: 'DELETE'
            }).then(
                this.getCategories
            );
        },
    },

    created() {
        this.getCategories()
    }
}
</script>



<!--<template>-->
<!--    <div class="flex flex-col justify-center max-w-6xl mx-auto sm:px-6 lg:px-8">-->
<!--        <div class="flex justify-center">-->
<!--            <table class="border-collapse border-2 border-slate-300 text-xl mt-4">-->
<!--                <thead>-->
<!--                <tr>-->
<!--                    <th class="border border-slate-300 px-4">Id</th>-->
<!--                    <th class="border border-slate-300 px-4">Category Name</th>-->
<!--                    <th class="border border-slate-300 px-4">Edit Category</th>-->
<!--                    <th class="border border-slate-300 px-4">Delete Category</th>-->
<!--                </tr>-->
<!--                </thead>-->
<!--                <tbody>-->

<!--                <tr>-->
<!--                    <td class="border border-slate-300 text-center"></td>-->
<!--                    <td class="border border-slate-300 text-center"><a href=""></a></td>-->
<!--                    <td class="border border-slate-300 text-center"><a href="">Edit</a></td>-->
<!--                    <td class="border border-slate-300 text-center">-->
<!--                        <form action="" method="POST">-->

<!--                            <button type="submit">Delete</button>-->
<!--                        </form>-->
<!--                    </td>-->
<!--                </tr>-->

<!--                </tbody>-->
<!--            </table>-->
<!--        </div>-->

<!--        <div class="mx-auto space-x-8 flex lg:px-8 mt-4">-->
<!--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-48">-->
<!--                <div class="flex justify-center p-6 bg-white border-b border-gray-200">-->
<!--                    <a href="">+ ADD Category</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-48">-->
<!--                <div class="flex justify-center p-6 bg-white border-b border-gray-200">-->
<!--                    <a href="">+ ADD Car</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-48">-->
<!--                <div class="flex justify-center p-6 bg-white border-b border-gray-200">-->
<!--                    <a href="">Filter Cars</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-48">-->
<!--                <div class="flex justify-center p-6 bg-white border-b border-gray-200">-->
<!--                    <a href="">Tags</a>-->
<!--                </div>-->
<!--            </div>-->

<!--        </div>-->
<!--    </div>-->

<!--</template>-->

<!--<script>-->
<!--export default {-->
<!--    name: "Categories"-->
<!--}-->
<!--</script>-->

<!--<style scoped>-->

<!--</style>-->
