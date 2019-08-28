<template>
    <div class="content" @click="maybeCloseNav">
        <slot/>
    </div>
</template>
<script>
    import EventBus from '../event-bus.js';
    export default {
        methods: {
            maybeCloseNav() {
                EventBus.$emit('navigation:close');
            }
        }
    }
</script>
