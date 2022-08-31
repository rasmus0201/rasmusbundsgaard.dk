<script lang="ts">
import { computed, defineComponent, h } from "vue";

export default defineComponent({
  props: {
    tag: {
      type: String,
      default: "button"
    },
    color: {
      type: String,
      default: "primary"
    },
    size: {
      type: Boolean,
      default: false
    },
    rounded: {
      type: Boolean,
      default: false
    },
    block: {
      type: Boolean,
      default: false
    },
    active: {
      type: Boolean,
      default: false
    },
    disabled: {
      type: Boolean,
      default: false
    },
    outline: {
      type: Boolean,
      default: false
    },
    btn: {
      type: Boolean,
      default: true
    }
  },
  setup(props, { slots }) {
    const classes = computed(() => {
      let c: { [key: string]: string | boolean } = {
        btn: props.btn
      };

      if (props.outline) {
        c["btn-outline-" + props.color] = true;
      } else {
        c["btn-" + props.color] = true;
      }

      if (props.size) {
        c["btn-" + props.size] = true;
      }

      if (props.rounded) {
        c["btn-rounded"] = true;
      }

      if (props.block) {
        c["w-100"] = true;
      }

      if (props.active) {
        c["active"] = true;
      }

      if (props.disabled) {
        c["disabled"] = true;
      }

      return c;
    });

    return () =>
      h(
        props.tag,
        {
          class: classes.value
        },
        slots.default?.()
      );
  }
});
</script>
