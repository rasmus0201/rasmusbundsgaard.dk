import { useStorage } from "@vueuse/core";
import { defineStore } from "pinia";

export const useDarkModeStore = defineStore("darkMode", {
  state: () => ({
    enabled: useStorage("darkMode", false)
  }),
  actions: {
    toggle() {
      this.enabled = !this.enabled;
    }
  }
});
