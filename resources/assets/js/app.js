/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import bulma from 'bulma';

window.Event = new class {
  constructor(){
      this.event = new Vue();
  }

  fire(event, data = null){
    this.event.$emit(event, data);
  }

  listen(event, callback){
      this.event.$on(event, callback);
  }
};

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('gibberish-component', require('./components/GibberishComponent.vue'));
Vue.component('binding-component', require('./components/BindingComponent.vue'));
Vue.component('computing-component', require('./components/ComputingComponent.vue'));
Vue.component('task-list', require('./components/TaskList.vue'));
Vue.component('task', require('./components/Task.vue'));
Vue.component('message', require('./components/Message.vue'));
Vue.component('modal', require('./components/Modal.vue'));
Vue.component('tabs', require('./components/Tabs.vue'));
Vue.component('tab', require('./components/Tab.vue'));
Vue.component('coupon', require('./components/Coupon.vue'));
Vue.component('progress-view', require('./components/Progress.vue'));
Vue.component('gibberish-table', require('./components/GibberishTable.vue'));
Vue.component('create-form', require('./components/CreateForm.vue'));
Vue.component('shared-one', require('./components/shared/SharedOne.vue'));
Vue.component('shared-two', require('./components/shared/SharedTwo.vue'));


const app = new Vue({
    el: '#app',
    data: {
        customBackground: false,
        message: 'Hello World!',
        showModal: false,
        couponApplied: false,
    },
    computed: {
        className: function () {
            return this.customBackground ? 'card-body darken' : 'card-body'
        },
        reversedMessage(){
            return this.message.split('').reverse().join('');
        }
    },
    methods:{
        onCouponApplied(){
            this.couponApplied = true;
        }
    },
    created(){
        Event.listen('applied', ()=>alert('handling it !'))
    }
});
