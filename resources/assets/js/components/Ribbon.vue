<template>
    <div class="ribbon" :class="tag">
        <div class="theribbon">{{label}}</div>
        <div class="ribbon-background"></div>
    </div>
</template>
<script>
export default {
  props: {
    label: {
      type: String,
      required: true
    },
    tag: {
      type: String,
      required: true
    }
  }
};
</script>