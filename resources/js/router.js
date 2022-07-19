import { createRouter, createWebHistory } from 'vue-router'
import Categories from "./components/categories/Categories";
import CategoriesCreate from "./components/categories/CategoriesCreate";
import CategoriesEdit from "./components/categories/CategoriesEdit";
import CreateEditCategory from "./components/categories/CreateEditCategory";

const routes = [
    {
        path: '/dashboard',
        name: 'Categories',
        component: Categories,
    },
    {
        path: '/categories/create',
        name: 'categories.create',
        component: CreateEditCategory
    },
    {
        path: '/categories/edit/:id',
        name: 'categories.edit',
        component: CreateEditCategory
    },


]
const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
})
export default router
