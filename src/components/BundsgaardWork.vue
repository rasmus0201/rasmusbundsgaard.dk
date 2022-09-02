<template>
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center text-uppercase">
          <h1 class="display-3 mb-3">Referencer</h1>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div
          v-for="(reference, index) in Bundsgaard.references"
          :key="index"
          class="col-lg-4 col-md-6 col-sm-12 reference"
        >
          <span
            class="img"
            :style="{ 'background-image': 'url(' + reference.url + ')' }"
          ></span>

          <span class="text">
            <span class="title" v-html="reference.title"></span>
            <span class="subtitle" v-html="reference.subtitle"></span>
          </span>
        </div>
      </div>
    </div>

    <div class="container mt-4">
      <div
        v-for="(recommendation, index) in Bundsgaard.recommendations"
        :key="index"
        class="row"
      >
        <div class="col-md-12 mb-4">
          <BButton
            tag="a"
            :href="recommendation.url"
            target="_blank"
            :block="true"
            class="py-3"
          >
            Se anbefaling fra {{ recommendation.name }}
          </BButton>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
import { BundsgaardSiteData as Bundsgaard } from "@/bundsgaard-data";

import BButton from "./BButton.vue";
</script>
