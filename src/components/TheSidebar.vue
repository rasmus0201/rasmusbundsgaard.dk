<template>
  <div class="sidebar">
    <a class="sidebar__header" href="/">
      <img
        class="sidebar__logo img-fluid"
        :src="Bundsgaard.logo"
        alt="Rasmus Bundsgaard Logo"
      />
    </a>
    <div class="sidebar__menu">
      <input
        class="menu__checkbox"
        type="checkbox"
        :checked="navigationStore.isOpen"
      />
      <label
        class="menu__toggle"
        @click.prevent.stop="navigationStore.toggle()"
      >
        <span class="menu__burger"></span>
      </label>
    </div>
    <div class="sidebar__footer">
      <a :href="formattedMail">
        <i class="fal fa-envelope"></i>
      </a>
      <a :href="Bundsgaard.social.facebook" target="_blank">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a :href="Bundsgaard.social.github" target="_blank">
        <i class="fab fa-github"></i>
      </a>
      <a :href="Bundsgaard.social.linkedin" target="_blank">
        <i class="fab fa-linkedin"></i>
      </a>
    </div>
  </div>
</template>

<script setup lang="ts">
import { computed } from "vue";

import { BundsgaardSiteData as Bundsgaard } from "@/data";
import { useNavigationStore } from "@/store/navigation";

const navigationStore = useNavigationStore();

const formattedMail = computed(() => `mailto:${Bundsgaard.social.mail}`);
</script>
