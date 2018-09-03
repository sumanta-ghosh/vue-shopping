<template>
    <div class="panel-heading">
        <h3 class="panel-title">{{heading}}</h3>
    </div>
</template>
<script>
export default {
  props: {
    heading: {
      type: String,
      required: true
    }
  }
};
</script>
