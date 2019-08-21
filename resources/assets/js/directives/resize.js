import Vue from 'vue';
import { debounce } from 'lodash';

Vue.directive('resize', {
    bind: function (el, binding) {
        window.addEventListener(
            'resize',
            debounce(binding.value, 150),
            false
        );
    },

    unbind: function (el, binding) {
        window.removeEventListener(
            'resize',
            debounce(binding.value, 150),
            false
        );
    }
})
