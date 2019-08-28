<template>
    <div class="navigation" :class="{ 'navigation--active': state }" ref="navigation">
        <ul class="menu" :class="{ 'menu--scrollbar': hasScrollbar }" ref="menu">
            <li class="menu__item" v-for="(item, index) in items" :class="{ 'menu__item--active': item.active }" :key="index">
                <a class="menu__link" :href="item.href" v-scroll-to="{ 'el': item.href, onDone: emitClose }">
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
<script>
    import EventBus from '../event-bus.js';
    export default {
        data() {
            return {
                state: false,
                hasScrollbar: false,
                items: [
                    {
                        active: false,
                        href: '#home',
                        iconClass: 'fas fa-home',
                        title: 'Start',
                        subtitle: 'Gå til start',
                    },
                    {
                        active: false,
                        href: '#info',
                        iconClass: 'fas fa-info-square',
                        title: 'Lidt om mig',
                        subtitle: 'Læs lidt om hvem jeg er.',
                    },
                    {
                        active: false,
                        href: '#portfolio',
                        iconClass: 'fas fa-quote-left',
                        title: 'Referencer',
                        subtitle: 'Se forrige jobs og udtalelser',
                    },
                    {
                        active: false,
                        href: '#skillset',
                        iconClass: 'fas fa-code',
                        title: 'Kompetencer',
                        subtitle: 'Hop til erfaringer',
                    },
                    {
                        active: false,
                        href: '#contact',
                        iconClass: 'fas fa-envelope',
                        title: 'Kontakt',
                        subtitle: 'Jeg er online 24/7 (næsten)',
                    },
                ]
            }
        },

        mounted() {
            EventBus.$on('navigation:close', this.close);
            EventBus.$on('navigation:toggle', this.toggle);
            EventBus.$on('navigation:update-active', this.updateActive);
            EventBus.$on('navigation:update-scrollbar', this.updateScrollbar);
        },

        methods: {
            close() {
                this.state = false;
            },

            emitClose() {
                EventBus.$emit('navigation:close');
            },

            toggle() {
                this.state = !this.state;
            },

            removeAllActive() {
                for (const item of this.items) {
                    item.active = false;
                }
            },

            setActiveItem(href) {
                this.removeAllActive();

                for (const item of this.items) {
                    if (item.href === href) {
                        item.active = true;

                        return;
                    }
                }
            },

            updateActive() {
                var scrolled = window.scrollY;

                for (const item of this.items) {
                    var section = document.querySelector(item.href);

                    if (section == null) {
                        return;
                    }

                    if( (section.offsetTop + section.getBoundingClientRect().height) > scrolled){
                        this.setActiveItem(item.href);

                        return false;
                    }
                }
            },

            updateScrollbar() {
                const maxHeight = this.$refs['navigation'].getBoundingClientRect().height;
                const menuHeight = this.$refs['menu'].scrollHeight + 50;

                this.hasScrollbar = (menuHeight > maxHeight);
            }
        }
    }
</script>
