<template>
    <div class="flex place-content-end mb-4">
        <router-link to="/dashboard" class="text-sm px-4 py-2 font-medium mx-2 text-white bg-indigo-600 hover:bg-indigo-700 cursor-pointer">Dashboard</router-link>
        <router-link to="/categories/create" class="text-sm px-4 py-2 font-medium mx-2 text-white bg-indigo-600 hover:bg-indigo-700 cursor-pointer">Create Category</router-link>
    </div>
</template>

<script>
export default {
    name: "Header"
}
</script>

<style scoped>

</style>
