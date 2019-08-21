<template>
    <div class="sidebar">
        <a class="sidebar__header" href="/">
            <img class="sidebar__logo img-fluid" :src="Bundsgaard.logo" alt="Rasmus Bundsgaard Logo">
        </a>
        <div class="sidebar__menu">
            <input class="menu__checkbox" id="sidebar__menu-checkbox-toggle" type="checkbox">
            <label class="menu__toggle" for="sidebar__menu-checkbox-toggle">
                <span class="menu__burger"></span>
            </label>
        </div>
        <div class="sidebar__footer">
            <a v-gclick="'contact:inbound'" :href="formattedMail">
                <i class="fal fa-envelope"></i>
            </a>
            <a v-gclick="'contact:inbound'" :href="formattedPhone">
                <i class="fal fa-phone"></i>
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
    export default {
        computed: {
            formattedPhone: function() {
                return 'tel:+45' + this.Bundsgaard.social.phone;
            },
            formattedMail: function() {
                return 'mailto:' + this.Bundsgaard.social.mail;
            },
        }
    }
</script>
