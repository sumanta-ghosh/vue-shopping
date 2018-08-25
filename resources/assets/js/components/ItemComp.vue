<template>
 <div class="item">
        <div class="product">
            <div class="flip-container">
                <div class="flipper">
                    <div class="front">
                        <a :href="itemDetails.link">
                            <img :src="itemDetails.thumb.front" :alt="itemDetails.title" class="img-responsive">
                        </a>
                    </div>
                    <div class="back">
                        <a :href="itemDetails.link">
                            <img :src="itemDetails.thumb.back" :alt="itemDetails.title" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
            <a :href="itemDetails.link" class="invisible">
                <img :src="itemDetails.thumb.front" :alt="itemDetails.title" class="img-responsive">
            </a>
            <div class="text">
                <h3><a :href="itemDetails.link"> {{ itemDetails.title }} </a></h3>
                <p class="price">
                    <del v-if="itemDetails.price.orginal != itemDetails.price.final">{{ itemDetails.price.orginal }}</del> {{ itemDetails.price.final }}
                </p>
            </div>
             <!-- /.text -->
        </div>
            <!-- /.product -->
        </div>
</template>

<script>
export default {
  props: {
    itemDetails: Object
  },
  data() {
    return {
      title: "dsdsds",
      details: this.itemDetails
    };
  },
  mounted() {
    console.log(this.itemDetails);
  }
};
</script>