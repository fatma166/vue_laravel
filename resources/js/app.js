require('./bootstrap');

window.Vue = require('vue');

Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('article-latest', require('./components/ArticleLatest.vue').default);

const app = new Vue({
    el: '#app'
});