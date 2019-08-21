import Vue from 'vue';

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
require('./backup');
require('./interactive-background');

require('./directives/resize');
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
    data() {
        return {
            test: 'hestemad'
        }
    },
    mounted() {
        this.$el.classList.remove('v-hide');
    },
    el: '#app',
});
