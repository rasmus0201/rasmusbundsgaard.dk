<script>
    export default {
        render(h) {
            return h(
                this.tag,
                {
                    class: this.classes
                },
                this.$slots.default
            )
        },
        props: {
            tag: {
                default: 'button'
            },
            color: {
                default: 'primary'
            },
            size: {
                default: false
            },
            rounded: {
                default: false
            },
            block: {
                default: false
            },
            active: {
                default: false,
            },
            disabled: {
                default: false,
            },
            outline: {
                default: false
            },
            btn: {
                default: true
            },
        },
        computed: {
            classes: function() {
                let c = {
                    'btn': this.btn
                };

                if (this.outline) {
                    c['btn-outline-' + this.color] = true;
                } else {
                    c['btn-' + this.color] = true;
                }

                if (this.size) {
                    c['btn-' + this.size] = true;
                }

                if (this.rounded) {
                    c['btn-rounded'] = true;
                }

                if (this.block) {
                    c['btn-block'] = true;
                }

                if (this.active) {
                    c['active'] = true;
                }

                if (this.disabled) {
                    c['disabled'] = true;
                }

                return c;
            }
        }
    }
</script>
