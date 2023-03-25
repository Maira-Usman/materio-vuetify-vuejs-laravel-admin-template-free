import AllCategories from './components/AllCategories.vue';
import CreateCategory from './components/CreateCategory.vue';
import EditCategory from './components/EditCategory.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllCategories
    },
    {
        name: 'create',
        path: '/create',
        component: CreateCategory
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditCategory
    }
];