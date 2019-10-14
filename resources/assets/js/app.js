import Vue from 'vue';
import VueScrollTo from 'vue-scrollto';
import EventBus from './event-bus';

Vue.use(VueScrollTo, {
    container: 'body',
    duration: 200,
    easing: 'ease-in-out',
    offset: 0,
});

Vue.mixin({
    data: function() {
        return {
            get Bundsgaard() {
                return window.Bundsgaard;
            }
        }
    }
});

require('./bootstrap');
require('./interactive-background');
require('./directives/track');

{
    const files = require.context('./components', true, /\.vue$/i);
    files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
}

{
    const files = require.context('./sections', true, /\.vue$/i);
    files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
}

const app = new Vue({
    mounted() {
        this.$el.classList.remove('v-hide');
        this.maybeUpdateActiveNavItem();
        this.maybeUpdateNavScrollbarVisibility();

        window.addEventListener('keyup', this.maybeCloseNav);
        window.addEventListener('scroll', this.maybeUpdateActiveNavItem);
        window.addEventListener('resize', this.maybeUpdateNavScrollbarVisibility);

        console.log('👋👋👋👋👋👋👋👋👋👋👋👋👋👋👋👋👋');
        console.log('Nysgerrig?');
        console.log('Skriv til mig på bundsgaard.rasmus@gmail.com');
        console.log('----');
        console.log('Ver: 2.0.0');
        console.log('Frontend: Vue2, FontAwesome 5, Bootstrap 4, Particles.js, Google Fonts');
        console.log('Backend: NGINX, PHP7, Laravel');
    },
    methods: {
        maybeCloseNav(event) {
            if (event.keyCode == 27) {
                EventBus.$emit('navigation:close');
            }
        },

        maybeUpdateActiveNavItem: _.throttle(() => {
            EventBus.$emit('navigation:update-active');
        }, 50),

        maybeUpdateNavScrollbarVisibility: _.throttle(() => {
            EventBus.$emit('navigation:update-scrollbar');
        }, 50)
    },
    el: '#app',
});
