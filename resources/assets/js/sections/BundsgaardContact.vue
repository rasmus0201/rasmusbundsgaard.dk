<template>
    <section class="section">
        <div class="wrap">
            <h3 class="display-3 text-uppercase text-white">
                Kontakt mig
            </h3>
            <p class="text-white">Jeg er online 24/7 (næsten).</p>

            <div class="row mt-5">
                <div class="contact-option mb-3 col-12">
                    <b-button tag="a" :rounded="true" :href="'mailto:' + Bundsgaard.social.mail" v-gclick="'contact:inbound'" class="px-4">
                        <i class="fal fa-envelope"></i>
                        {{ Bundsgaard.social.mail }}
                    </b-button>
                </div>
                <div class="contact-option mb-3 col-12">
                    <b-button tag="a" :rounded="true" v-gclick="'contact:outbound'" :href="Bundsgaard.social.facebook" class="px-4" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                        {{ name }}
                    </b-button>
                </div>
                <div class="contact-option mb-3 col-12">
                    <b-button tag="a" :rounded="true" v-gclick="'contact:outbound'" :href="Bundsgaard.social.github" class="px-4" target="_blank">
                        <i class="fab fa-github"></i>
                        {{ name }}
                    </b-button>
                </div>
                <div class="contact-option mb-3 col-12">
                    <b-button tag="a" :rounded="true" v-gclick="'contact:outbound'" :href="Bundsgaard.social.linkedin" class="px-4" target="_blank">
                        <i class="fab fa-linkedin"></i>
                        {{ name }}
                    </b-button>
                </div>
            </div>
        </div>
        <p class="footer-text">
            &copy; {{ Bundsgaard.date.year }} | Designed and coded with <i class="fa fa-heart fa-primary"></i> by {{ Bundsgaard.middleName }}
        </p>
    </section>
</template>
<script>
    export default {
        computed: {
            name: function() {
                return Bundsgaard.firstName + ' ' + Bundsgaard.middleName;
            }
        }
    }
</script>
