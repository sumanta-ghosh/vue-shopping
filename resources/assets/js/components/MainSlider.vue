<template>
    <div id="main-slider">
        <div class="item" v-for="slider in sliders" :key="slider.id">
            <img :src="slider.image" :alt="slider.title" class="img-responsive">
        </div>
    </div>
</template>

<script>
import { HTTP } from "../http-common";
export default {
  data() {
    return {
      sliders: []
    };
  },
  mounted() {
    HTTP.get("api/sliders")
      .then(response => {
        this.sliders = response.data;
      })
      .catch(e => {
        this.errors.push(e);
      });
  },
  updated() {
    $(this.$el).owlCarousel({
      navigation: true, // Show next and prev buttons
      slideSpeed: 300,
      paginationSpeed: 400,
      autoPlay: true,
      stopOnHover: true,
      singleItem: true,
      afterInit: ""
    });
  }
};
</script>