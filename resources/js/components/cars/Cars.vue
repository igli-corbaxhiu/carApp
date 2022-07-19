<template>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3 text-center">
                Car Id
            </th>
            <th scope="col" class="px-6 py-3 text-center">
                Car Brand
            </th>
            <th scope="col" class="px-6 py-3 text-center">
                Production Year
            </th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white
                even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700"
            v-for="car in cars">
            <td class="px-6 py-4 text-center">
                {{ car.id }}
            </td>
            <td class="px-6 py-4 text-center">
                {{ car.brand }}
            </td>
            <td class="px-6 py-4 text-center">
                {{ car.prod_year }}
            </td>
            <td class="px-6 py-4 text-center">
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
            </td>
            <td class="px-6 py-4 text-center">
                <a href="#" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Delete</a>
            </td>
        </tr>
        <tr>

        </tr>

        </tbody>
    </table>

</template>

<script>
import axios from "axios";

export default {
    name: "Cars",
    data(){
        return{
            cars: [],
        }
    },
    methods: {
        getCars() {
            axios.get('/getCars').then(response => {
                this.cars = response.data;
            });
            console.log(this.cars);
        }
    },

    created() {
        this.getCars();
    }
}
</script>

<style scoped>

</style>
