<template>
  <div
    ref="$navigation"
    class="navigation"
    :class="{ 'navigation--active': navigationStore.isOpen }"
  >
    <ul
      ref="$menu"
      class="menu"
      :class="{ 'menu--scrollbar': data.hasScrollbar }"
    >
      <li
        v-for="(item, index) in data.items"
        :key="index"
        class="menu__item"
        :class="{ 'menu__item--active': item.href === `#${activeItem}` }"
      >
        <a
          v-scroll-to="{ el: item.href, onDone: navigationStore.close }"
          class="menu__link"
          :href="item.href"
        >
          <span class="menu__title">
            <i :class="item.iconClass"></i>
            {{ item.title }}
          </span>
          <span class="menu__subtitle">{{ item.subtitle }}</span>
        </a>
      </li>
    </ul>
  </div>
</template>

<script setup lang="ts">
import { throttle } from "lodash";
import { onMounted, reactive, ref } from "vue";

import { useNavigationStore } from "@/store/navigation";

defineProps<{
  activeItem: string | null;
}>();

const navigationStore = useNavigationStore();

const data = reactive({
  hasScrollbar: false,
  items: [
    {
      href: "#home",
      iconClass: "fas fa-home",
      title: "Start",
      subtitle: "Gå til start"
    },
    {
      href: "#info",
      iconClass: "fas fa-info-square",
      title: "Lidt om mig",
      subtitle: "Læs lidt om hvem jeg er."
    },
    {
      href: "#portfolio",
      iconClass: "fas fa-quote-left",
      title: "Referencer",
      subtitle: "Se forrige jobs og udtalelser"
    },
    {
      href: "#skillset",
      iconClass: "fas fa-code",
      title: "Kompetencer",
      subtitle: "Hop til erfaringer"
    },
    {
      href: "#contact",
      iconClass: "fas fa-envelope",
      title: "Kontakt",
      subtitle: "Jeg er online 24/7 (næsten)"
    }
  ]
});

const $navigation = ref<HTMLElement | undefined>();
const $menu = ref<HTMLElement | undefined>();

const updateScrollbarVisibility = () => {
  const maxHeight = $navigation.value?.getBoundingClientRect().height ?? 0;
  const menuHeight = ($menu.value?.scrollHeight ?? 0) + 50;
  const bodyWidth = window.innerWidth;

  data.hasScrollbar = menuHeight > maxHeight && bodyWidth > 600;
};

const maybeUpdateNavScrollbarVisibility = throttle(() => {
  updateScrollbarVisibility();
}, 50);

const maybeCloseNav = (event: KeyboardEvent) => {
  if (event.keyCode === 27) {
    navigationStore.close();
  }
};

onMounted(() => {
  updateScrollbarVisibility();

  window.addEventListener("keyup", maybeCloseNav);
  window.addEventListener("resize", maybeUpdateNavScrollbarVisibility);
});
</script>
