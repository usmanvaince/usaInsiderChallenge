require('./bootstrap');
window.Vue = require('vue');

Vue.component('scoreBoard',require('./Pages/ScoreBoard').default);

const app = new Vue({
    el: '#app'
});

