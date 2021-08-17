<template>
    <div class="sidebar">
        <a class="sidebar__header" href="/">
            <img class="sidebar__logo img-fluid" :src="Bundsgaard.logo" alt="Rasmus Bundsgaard Logo">
        </a>
        <div class="sidebar__menu">
            <input class="menu__checkbox" type="checkbox" :checked="navState">
            <label class="menu__toggle" @click="toggleNav">
                <span class="menu__burger"></span>
            </label>
        </div>
        <div class="sidebar__footer">
            <a v-gclick="'contact:inbound'" :href="formattedMail">
                <i class="fal fa-envelope"></i>
            </a>
            <a v-gclick="'contact:outbound'" :href="Bundsgaard.social.facebook" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a v-gclick="'contact:outbound'" :href="Bundsgaard.social.github" target="_blank">
                <i class="fab fa-github"></i>
            </a>
            <a v-gclick="'contact:outbound'" :href="Bundsgaard.social.linkedin" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
    </div>
</template>
<script>
    import EventBus from '../event-bus.js';
    export default {
        data() {
            return {
                navState: false
            }
        },
        computed: {
            formattedMail: function() {
                return 'mailto:' + this.Bundsgaard.social.mail;
            },
        },

        mounted() {
            EventBus.$on('navigation:close', this.closeNav);
        },

        methods: {
            closeNav() {
                this.navState = false;
            },

            toggleNav() {
                this.navState = !this.navState;
                EventBus.$emit('navigation:toggle');
            }
        }
    }
</script>
