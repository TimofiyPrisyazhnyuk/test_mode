/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('tasks', require('./components/Tasks.vue'));

Vue.component('todo-item', {
    props: ['todo'],
    template: '<li>{{ todo.text }}</li>'
});


const app = new Vue({
    el: '#app',
    data: {
        name: '',
        message: 'Вы загрузили эту страницу в: ' + new Date().toLocaleString(),
        seen: true,
        todos: [
            { text: 'Изучить JavaScript' },
            { text: 'Изучить Vue' },
            { text: 'Создать что-нибудь классное' }
        ],
        groceryList: [
            { id: 0, text: 'Овощи' },
            { id: 1, text: 'Сыр' },
            { id: 2, text: 'Что там ещё люди едят?' }
        ]
    }
});




