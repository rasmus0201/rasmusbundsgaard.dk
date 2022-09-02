<template>
  <section class="section">
    <div id="particles-js"></div>
    <div id="particles-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center text-white">
          <h1 class="display-3 text-uppercase">{{ name }}</h1>
          <h4>Mit online portfolio og CV</h4>
          <p>
            Her finder du tidligere opgaver, erfaringer, uddannelse og
            oplysninger om mig.
          </p>
          <div class="row mt-4">
            <div class="contact-option col-12 text-center">
              <BButton
                tag="a"
                class="px-4 me-2 mb-2 mb-lg-0"
                :href="'mailto:' + Bundsgaard.social.mail"
              >
                <i class="fal fa-envelope"></i>
                {{ Bundsgaard.social.mail }}
              </BButton>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script setup lang="ts">
import { computed, onMounted } from "vue";

import { BundsgaardSiteData as Bundsgaard } from "@/bundsgaard-data";
import { particlesJS } from "@/packages/particles";

import BButton from "./BButton.vue";

const name = computed(() => `${Bundsgaard.firstName} ${Bundsgaard.middleName}`);

onMounted(() => {
  particlesJS("particles-js", {
    particles: {
      number: {
        value: 180,
        density: {
          enable: true,
          value_area: 800
        }
      },
      color: {
        value: "#ffffff"
      },
      opacity: {
        value: 0.4,
        random: false,
        anim: {
          enable: false,
          speed: 1,
          opacity_min: 0.1,
          sync: false
        }
      },
      size: {
        value: 2,
        random: true,
        anim: {
          enable: false,
          speed: 40,
          size_min: 0.2,
          sync: false
        }
      },
      line_linked: {
        enable: true,
        distance: 125,
        color: "#ffffff",
        opacity: 0.4,
        width: 1
      },
      move: {
        enable: true,
        speed: 1.25,
        direction: "none",
        random: false,
        straight: false,
        out_mode: "out",
        bounce: true,
        attract: {
          enable: false,
          rotateX: 600,
          rotateY: 1200
        }
      }
    },
    retina_detect: true
  });
});
</script>
