import Vue from 'vue';

Vue.directive('gclick', {
    bind: function (el, binding) {
        const event = {
            'event_category': binding.value,
            'event_label': el.href
        };

        const handler = function() {
            window.gtag('event', 'click', event);
        }

        el.addEventListener('click', handler);
        el.$destroy = () => el.removeEventListener('click', handler)
    },

    unbind: function (el, binding) {
        el.$destroy();
    }
})
