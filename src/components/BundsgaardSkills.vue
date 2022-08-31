<template>
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center text-uppercase">
          <h1 class="display-3 mb-3">Kompetencer</h1>
        </div>
      </div>

      <div
        v-for="category in categories"
        :key="category.title"
        class="row mb-5"
      >
        <div class="col-md-1 d-flex justify-content-center align-items-center">
          <span class="skillset-type">{{ category.title }}</span>
        </div>
        <div class="col-md-6">
          <div
            v-for="(skill, index) in category.skills"
            :key="category.title + '-' + index"
            class="progress progress-md mb-3"
          >
            <div
              class="progress-bar"
              :class="[skill.class]"
              role="progressbar"
              :style="{ width: skill.experience + '%' }"
              :aria-valuenow="skill.experience"
              aria-valuemin="0"
              aria-valuemax="100"
              v-html="skill.body"
            ></div>
          </div>
        </div>
        <div class="col-md-5" v-html="category.description"></div>
      </div>
    </div>
  </section>
</template>
<script setup lang="ts">
import { ref } from "vue";

import { BundsgaardSiteData as Bundsgaard } from "@/data";

const categories = ref([
  {
    title: "Backend",
    description: `Jeg arbejder bedst i PHP med Laravel som Framework eller Wordpress CMS. Jeg har også arbejdet med versionsstyring (Git). Jeg synes det er sjovt at lære nye teknologier, og vil gerne lære at lave Apps, eller Desktop Software. Jeg har programmeret i PHP siden starten af 2014.
                        <br><br>
                        Jeg har også god erfaring med Linux. Denne side er hostet på VPS hos Digital Ocean med Ubuntu Server.`,
    skills: [
      {
        body: "PHP 5/7",
        experience: 95,
        class: "bg-success"
      },
      {
        body: "Laravel 5",
        experience: 93,
        class: "bg-success"
      },
      {
        body: '<span class="d-none d-xl-block">Wordpress. Opsætning, Tema og Plugin-udvikling.</span><span class="d-xl-none">Wordpress</span>',
        experience: 88,
        class: "bg-success"
      },
      {
        body: "Linux",
        experience: 83,
        class: "bg-success"
      }
    ]
  },
  {
    title: "Frontend",
    description: `Jeg har arbejdet med HTML/CSS mere end ${Bundsgaard.yop} år, og jeg har holdt mig up-to-date med de nyeste tags og CSS-regler. Jeg kan følge en skitse/ et design ned til mindste detalje. Jeg har prøvet kræfter med JS frameworks som VueJS, Angular og AngularJS. Jeg har også arbejdet lidt Adobe programmerne, samt noget 3D-modellering.`,
    skills: [
      {
        body: "HTML5",
        experience: 99,
        class: "bg-success"
      },
      {
        body: "CSS3/4",
        experience: 92,
        class: "bg-success"
      },
      {
        body: "Javascript (ES5 & ES6)",
        experience: 87,
        class: "bg-success"
      },
      {
        body: "Bootstrap 4",
        experience: 92,
        class: "bg-success"
      },
      {
        body: "Photoshop CC",
        experience: 60,
        class: "bg-warning"
      }
    ]
  }
]);
</script>
