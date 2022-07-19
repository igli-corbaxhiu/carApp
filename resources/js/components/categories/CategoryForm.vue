<template>
    <form>
        <div>
            <label class="text-sm" for="name">Category Name:</label>
            <input class="text-md border-2 bg-white" type="text" id="name" name="name" v-model="category.name" required>
        </div>
    </form>
    <button class="border-2 bg-slate-300 p-2 rounded mt-2" type="submit">{{ buttonName }}</button>

</template>

<script>
export default {
    name: "CategoryForm",
    props: {
        buttonName: String,
        category: {
            name: String
        }
    },

}
</script>

<style scoped>

</style>
