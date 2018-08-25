<template>
    <div class="product-slider">
        <item v-for="itemDetails in items" :key="itemDetails.id" v-bind:itemDetails="itemDetails"></item>
    </div>
</template>

<script>
import { HTTP } from "../http-common";
export default {
  data() {
    return {
      items: [],
      isLoading: true
    };
  },
  mounted() {
    HTTP.get("api/item/feature")
      .then(response => {
        this.items = response.data;
        console.log(this.items);
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
      afterInit: function() {
        $(".product-slider .item").css("visibility", "visible");
      }
    });
  }
};
</script>
