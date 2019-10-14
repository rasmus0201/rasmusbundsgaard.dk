import Vue from 'vue';
import Vuex from 'vuex';
import VueScrollTo from 'vue-scrollto';
import EventBus from './event-bus';

Vue.use(Vuex);

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

/**
 * Store
 */
import store from './store/store';


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

import { mapState, mapActions } from 'vuex';

const app = new Vue({
    store: store,

    data() {
        return {
            easterEgg: {
                cursor: 0,
                code: 'dark', // ['d', 'a', 'r', 'k'],
            }
        };
    },

    computed: {
        ...mapState({
            darkMode: state => state.darkMode.enabled
        })
    },

    watch: {
        darkMode: function (newValue, oldValue) {
            if (newValue === true) {
                document.body.classList.add('dark-mode');
            } else {
                document.body.classList.remove('dark-mode');
            }
        }
    },

    created() {
        if (localStorage.getItem('darkMode') === 'true') {
            this.toggleDarkMode();
        }
    },

    mounted() {
        this.$el.classList.remove('v-hide');
        this.maybeUpdateActiveNavItem();
        this.maybeUpdateNavScrollbarVisibility();

        window.addEventListener('keyup', this.maybeActivateEasterEgg);

        window.addEventListener('keyup', this.maybeCloseNav);
        window.addEventListener('scroll', this.maybeUpdateActiveNavItem);
        window.addEventListener('resize', this.maybeUpdateActiveNavItem);
        window.addEventListener('resize', this.maybeUpdateNavScrollbarVisibility);

        // console.log('👋👋👋👋👋👋👋👋👋👋👋👋👋👋👋👋👋');
        // console.log('Nysgerrig?');
        // console.log('Skriv til mig på bundsgaard.rasmus@gmail.com');
        // console.log('----');
        // console.log('Ver: 2.0.0');
        // console.log('Frontend: Vue2, FontAwesome 5, Bootstrap 4, Particles.js, Google Fonts');
        // console.log('Backend: NGINX, PHP7, Laravel');
    },

    methods: {
        ...mapActions({
            toggleDarkMode: 'darkMode/toggle'
        }),

        maybeCloseNav(event) {
            if (event.keyCode == 27) {
                EventBus.$emit('navigation:close');
            }
        },

        maybeActivateEasterEgg(e) {
            // If not the typed char is not the next character
            // then reset the cursor
            if (this.easterEgg.code[this.easterEgg.cursor] !== e.key) {
                this.easterEgg.cursor = 0;

                return;
            }

            // Check if last character of code
            if (++this.easterEgg.cursor == this.easterEgg.code.length) {
                this.toggleDarkMode();

                this.easterEgg.cursor = 0;
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
