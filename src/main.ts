import "@/styles/fontawesome-all.min.css";
import "@/styles/app.scss";

import { createPinia } from "pinia";
import { createApp } from "vue";
import VueScrollTo from "vue-scrollto";

import App from "./App.vue";

const app = createApp(App);

app.use(createPinia());

app.use(VueScrollTo, {
  container: "body",
  duration: 200,
  easing: "ease-in-out",
  offset: 0
});

app.mount("#app");
