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

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('logo', require('./components/LogoComp.vue'));
Vue.component('items', require('./components/ItemsComp.vue'));
Vue.component('item', require('./components/ItemComp.vue'));
Vue.component('mainSlider', require('./components/MainSlider.vue'));
Vue.component('ribbon', require('./components/Ribbon.vue'));
Vue.component('breadcrumb', require('./components/BreadcrumbComp.vue'));
Vue.component('panel-heading', require('./components/PanelHeading.vue'));
Vue.component('category-menu', require('./components/CategoryMenu.vue'));
Vue.component('category-menu', require('./components/AddToCartBtn.vue'));
Vue.component('add-to-wishlist-btn', require('./components/AddToWishlistBtn.vue'));
Vue.component('add-to-cart-btn', require('./components/AddToCartBtn.vue'));

const app = new Vue({
    el: '#app'
});
