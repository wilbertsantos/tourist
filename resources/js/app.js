import './bootstrap';

import router from './router'
import { createApp } from 'vue'
import Welcome from './components/Welcome'

const app = createApp({})

app.use(router)
app.component('welcome', Welcome)

app.mount('#app')