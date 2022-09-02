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
    block: {
      type: Boolean,
      default: false
    }
  },
  setup(props, { slots }) {
    const classes = computed(() => {
      let c: { [key: string]: string | boolean } = {
        btn: true
      };

      c["btn-" + props.color] = true;
      c["rounded-pill"] = true;

      if (props.size) {
        c["btn-" + props.size] = true;
      }

      if (props.block) {
        c["w-100"] = true;
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
