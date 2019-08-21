<template>
    <section class="section full-height">
        <div id="particles-js"></div>
        <div id="particles-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-white">
                    <h1 class="display-3 text-uppercase">{{ name }}</h1>
                    <h4>Mit online portfolio og CV</h4>
                    <p>Her finder du tidligere opgaver, erfaringer, uddannelse og oplysninger om mig.</p>
                    <div class="row mt-4">
                        <div class="contact-option col-12 text-center">
                            <b-button tag="a" :rounded="true" v-gclick="'contact:inbound'" class="px-4 mr-2 mb-2 mb-lg-0" :href="'mailto:' + Bundsgaard.social.mail">
                                <i class="fal fa-envelope"></i>
                                {{ Bundsgaard.social.mail }}
                            </b-button>
                            <b-button tag="a" :rounded="true" v-gclick="'contact:inbound'" class="px-4" :href="'tel:+45' + Bundsgaard.social.phone">
                                <i class="fal fa-phone"></i>
                                {{ phone }}
                            </b-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    computed: {
        name: function() {
            return Bundsgaard.firstName + ' ' + Bundsgaard.middleName;
        },

        phone: function () {
            return Bundsgaard.social.phone.replace(/(.{2})/g, '$1 ');
        }
    }
}
</script>
