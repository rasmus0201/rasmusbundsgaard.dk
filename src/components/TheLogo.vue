<template>
  <div class="the-logo">
    <a v-scroll-to="{ el: '#home' }" class="the-logo__logo" href="/#home">
      <img
        class="the-logo__image img-fluid"
        src="@/assets/logo-rb.png"
        alt="Rasmus Bundsgaard Logo"
      />
    </a>
  </div>
</template>

<style lang="scss" scoped>
.the-logo {
  width: 75px;
  height: 75px;
  background: #fff;
  border-radius: 10px;
  position: fixed;
  z-index: 99;
  top: 10px;
  left: 10px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);

  &__logo {
    display: block;
    padding: 15px;
  }
}
</style>
