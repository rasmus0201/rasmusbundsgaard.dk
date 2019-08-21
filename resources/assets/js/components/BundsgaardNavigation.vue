<template>
    <div class="navigation">
        <ul class="menu">
            <li class="menu__item" v-for="(item, index) in items" :class="{ 'v-active': item.active }" :key="index">
                <a class="menu__link" :href="item.href">
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
    export default {
        data() {
            return {
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
        }
    }
</script>
