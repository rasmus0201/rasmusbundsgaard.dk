<template>
  <div class="content" @click="navigationStore.close()">
    <slot />
  </div>
</template>

<script setup lang="ts">
import { useNavigationStore } from "@/store/navigation";

const navigationStore = useNavigationStore();
</script>
