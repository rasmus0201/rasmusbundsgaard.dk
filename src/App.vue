<template>
  <div :class="{ 'dark-mode': darkModeStore.enabled }">
    <TheSidebar />
    <TheNavigation :active-item="activeSection" />
    <TheContent id="scrollArea">
      <BundsgaardStart id="home" />
      <BundsgaardInfo id="info" />
      <BundsgaardWork id="portfolio" />
      <BundsgaardSkills id="skillset" />
      <BundsgaardContact id="contact" />
    </TheContent>
  </div>
</template>

<script setup lang="ts">
import { onMounted, reactive, ref } from "vue";

import BundsgaardContact from "@/components/BundsgaardContact.vue";
import BundsgaardInfo from "@/components/BundsgaardInfo.vue";
import BundsgaardSkills from "@/components/BundsgaardSkills.vue";
import BundsgaardStart from "@/components/BundsgaardStart.vue";
import BundsgaardWork from "@/components/BundsgaardWork.vue";
import TheContent from "@/components/TheContent.vue";
import TheNavigation from "@/components/TheNavigation.vue";
import TheSidebar from "@/components/TheSidebar.vue";
import { useDarkModeStore } from "@/store/darkMode";

import { onIntersection } from "./helpers";

const darkModeStore = useDarkModeStore();

// Easter-egg!
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
onMounted(() => window.addEventListener("keyup", maybeActivateEasterEgg));

// Navigation active section item.
const activeSection = ref<string>("#home");
const initIntersection = () => {
  document
    .querySelectorAll("#home, #info, #portfolio, #skillset, #contact")
    .forEach((i: Element) => {
      onIntersection(i as HTMLElement, 0.33, (e) => {
        activeSection.value = e.target.id;
      });
    });
};
onMounted(() => initIntersection());
</script>
