<script>
import Header from "./components/Header";
import Categories from "./components/categories/Categories";
import CategoriesCreate from "./components/categories/CategoriesCreate";

export default {
    components: {
        CategoriesCreate,
        Categories,
        Header
    },
}
</script>

<template>
    <div>
        <Header></Header>
        <router-view></router-view>
    </div>


<!--    <div>-->
<!--        <Navbar></Navbar>-->
<!--    </div>-->
<!--    <div>-->
<!--        <Header></Header>-->
<!--    </div>-->
<!--    <div>-->
<!--        <Home></Home>-->
<!--    </div>-->
<!--    <div>-->
<!--        <Footer></Footer>-->
<!--    </div>-->
</template>

<style>
/*@import '../../public/css/styles.css';*/
</style>
