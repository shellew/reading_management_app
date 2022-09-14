/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

import HeaderComponent from './components/HeaderComponent.vue';
app.component('header-component', HeaderComponent);

import Sidebar from './components/Sidebar.vue';
app.component('sidebar', Sidebar);

import Scafold from './components/Scafold.vue';
app.component('scafold', Scafold);

import BookInformationTable from './components/BookInformationTable.vue';
app.component('book-information-table', BookInformationTable);

import InfoInput from './components/InfoInput.vue';
app.component('info-input', InfoInput);

import StatusOptionItem from './components/StatusOptionItem.vue';
app.component('status-option-item', StatusOptionItem);

import CommentInputItem from './components/CommentInputItem.vue';
app.component('comment-input-item', CommentInputItem);

import ButtonItem from './components/ButtonItem.vue';
app.component('button-item', ButtonItem);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.globEager('./**/*.vue')).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
