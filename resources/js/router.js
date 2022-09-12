import { processExpression } from '@vue/compiler-core'
import Vue from 'vue'
import Router from 'vue-router'
// import Task from './views/Task.vue'
// createApp(App).user(router).mount('#app');

Vue.use(Router)

export default new Router({
    mode:'history',
    base:process.env.BASE_URL,
    routes:[
        {
            path:'/task',
        }
    ]
})