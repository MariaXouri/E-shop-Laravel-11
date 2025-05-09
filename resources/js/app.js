// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * includes Vue and other libraries. It is a great starting point when
//  * building robust, powerful web applications using Vue and Laravel.
//  */

// import './bootstrap';
// import { createApp } from 'vue';

// /**
//  * Next, we will create a fresh Vue application instance. You may then begin
//  * registering components with the application instance so they are ready
//  * to use in your application's views. An example is included for you.
//  */

// const app = createApp({});

// import ExampleComponent from './components/ExampleComponent.vue';
// app.component('example-component', ExampleComponent);

// /**
//  * The following block of code may be used to automatically register your
//  * Vue components. It will recursively scan this directory for the Vue
//  * components and automatically register them with their "basename".
//  *
//  * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
//  */

// // Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
// //     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// // });

// /**
//  * Finally, we will attach the application instance to a HTML element with
//  * an "id" attribute of "app". This element is included with the "auth"
//  * scaffolding. Otherwise, you will need to add an element yourself.
//  */

// app.mount('#app');

import './bootstrap';
import Vue from "vue";
import App from "./App.vue";
//import { createApp } from 'vue';
import VueRouter from "vue-router";
import router from "./Router/index";
import VueInstantSearch from 'vue-instantsearch';
import { BootstrapVue, IconsPlugin } from "bootstrap-vue";
import { BCarousel } from 'bootstrap-vue'
import { BCarouselSlide } from 'bootstrap-vue'
import { CarouselPlugin } from 'bootstrap-vue'
import vSelect from "vue-select";


Vue.use(VueRouter);
Vue.use('email-component', ('./Views/Email.vue').default);
Vue.use(VueInstantSearch);
Vue.use(BootstrapVue);
Vue.component('b-carousel', BCarousel)
Vue.use(CarouselPlugin)
Vue.component("v-select", vSelect);



//Vue.use('email-component', ('./Views/Email.vue').default);

const app = new Vue({
    el: "#app",
    render: (h) => h(App),
    components: { App },
    router,
 
})
