import { defineStore } from "pinia";

export const useNavigationStore = defineStore("navigation", {
  state: () => ({
    isOpen: false
  }),
  actions: {
    close() {
      this.isOpen = false;
    },

    toggle() {
      this.isOpen = !this.isOpen;
    }
  }
});
