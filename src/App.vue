<template>
  <div :class="{ 'dark-mode': darkModeStore.enabled }">
    <TheSidebar />
    <TheNavigation />
    <TheContent>
      <BundsgaardStart id="home" />
      <BundsgaardInfo id="info" />
      <BundsgaardWork id="portfolio" />
      <BundsgaardSkills id="skillset" />
      <BundsgaardContact id="contact" />
    </TheContent>
  </div>
</template>

<script setup lang="ts">
import { onMounted, reactive } from "vue";

import BundsgaardContact from "@/components/BundsgaardContact.vue";
import BundsgaardInfo from "@/components/BundsgaardInfo.vue";
import BundsgaardSkills from "@/components/BundsgaardSkills.vue";
import BundsgaardStart from "@/components/BundsgaardStart.vue";
import BundsgaardWork from "@/components/BundsgaardWork.vue";
import TheContent from "@/components/TheContent.vue";
import TheNavigation from "@/components/TheNavigation.vue";
import TheSidebar from "@/components/TheSidebar.vue";
import { useDarkModeStore } from "@/store/darkMode";

const darkModeStore = useDarkModeStore();

const easterEgg = reactive({
  cursor: 0,
  code: "dark"
});

const maybeActivateEasterEgg = (e: KeyboardEvent) => {
  // If not the typed char is not the next character
  // then reset the cursor
  if (easterEgg.code[easterEgg.cursor] !== e.key) {
    easterEgg.cursor = 0;

    return;
  }

  // Check if last character of code
  if (++easterEgg.cursor === easterEgg.code.length) {
    darkModeStore.toggle();

    easterEgg.cursor = 0;
  }
};

onMounted(() => {
  window.addEventListener("keyup", maybeActivateEasterEgg);
});
</script>
