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
        :class="{ 'menu__item--active': item.active }"
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

const navigationStore = useNavigationStore();

const data = reactive({
  hasScrollbar: false,
  items: [
    {
      active: false,
      href: "#home",
      iconClass: "fas fa-home",
      title: "Start",
      subtitle: "Gå til start"
    },
    {
      active: false,
      href: "#info",
      iconClass: "fas fa-info-square",
      title: "Lidt om mig",
      subtitle: "Læs lidt om hvem jeg er."
    },
    {
      active: false,
      href: "#portfolio",
      iconClass: "fas fa-quote-left",
      title: "Referencer",
      subtitle: "Se forrige jobs og udtalelser"
    },
    {
      active: false,
      href: "#skillset",
      iconClass: "fas fa-code",
      title: "Kompetencer",
      subtitle: "Hop til erfaringer"
    },
    {
      active: false,
      href: "#contact",
      iconClass: "fas fa-envelope",
      title: "Kontakt",
      subtitle: "Jeg er online 24/7 (næsten)"
    }
  ]
});

const $navigation = ref<HTMLElement | undefined>();
const $menu = ref<HTMLElement | undefined>();

const removeAllActive = () => {
  for (const item of data.items) {
    item.active = false;
  }
};

const setActiveItem = (href: string) => {
  removeAllActive();

  for (const item of data.items) {
    if (item.href === href) {
      item.active = true;

      return;
    }
  }
};

const updateActive = () => {
  const scrolled = window.scrollY;

  for (const item of data.items) {
    const section = document.querySelector<HTMLLinkElement>(item.href);

    if (section === null) {
      continue;
    }

    const sectionMax = Math.floor(
      section.offsetTop + section.getBoundingClientRect().height
    );

    if (sectionMax > scrolled) {
      setActiveItem(item.href);
      return;
    }
  }
};

const updateScrollbar = () => {
  const maxHeight = $navigation.value?.getBoundingClientRect().height ?? 0;
  const menuHeight = ($menu.value?.scrollHeight ?? 0) + 50;
  const bodyWidth = window.innerWidth;

  data.hasScrollbar = menuHeight > maxHeight && bodyWidth > 600;
};

const maybeUpdateActiveNavItem = throttle(() => {
  updateActive();
}, 50);

const maybeUpdateNavScrollbarVisibility = throttle(() => {
  updateScrollbar();
}, 50);

const maybeCloseNav = (event: KeyboardEvent) => {
  if (event.keyCode === 27) {
    navigationStore.close();
  }
};

onMounted(() => {
  updateActive();
  updateScrollbar();

  window.addEventListener("scroll", maybeUpdateActiveNavItem, {
    passive: true
  });
  window.addEventListener("keyup", maybeCloseNav);
  window.addEventListener("resize", maybeUpdateActiveNavItem);
  window.addEventListener("resize", maybeUpdateNavScrollbarVisibility);
});
</script>
