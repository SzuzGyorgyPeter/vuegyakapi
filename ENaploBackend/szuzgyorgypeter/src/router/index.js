import { createRouter, createWebHistory } from 'vue-router'
import HomeView from "@/views/HomeView.vue";
import AddGrade from "@/views/AddGrade.vue";
import StudentDetailsView from "@/views/StudentDetailsView.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView,
    },
    {
      path: '/add',
      name: 'addgrade',
      component: AddGrade,
    },
    {
      path: '/details',
      name: 'details',
      component: StudentDetailsView,
    },
  ],
})

export default router
