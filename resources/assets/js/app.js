require('./bootstrap');

window.Vue = require('vue');

Vue.component('weekly-schedule', require('./components/WeeklySchedule.vue'));

const app = new Vue({
    el: '#app'
});
