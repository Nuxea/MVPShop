<script setup>

import {computed} from "vue";

const props = defineProps({
    product: {
        type: Object,
        required: true,
    }
})

const price = computed(() => {
    return (props.product.price / 100).toLocaleString('en-US', { minimumFractionDigits: 2 })
})
</script>

<template>
    <div class="col-12 col-md-6 mb-2 pb-2">
        <div class="product-box">
            <div class="image">
                <img
                    :alt="product.name"
                    :src="product.imageFilename"
                    class="img-fluid mb-2"
                >
                <h3 class="font-weight-bold mb-2 px-2">
                    {{ product.name }}
                </h3>
            </div>
            <div class="p-2 my-3 d-md-flex justify-content-between">
                <p class="p-0 d-inline">
                    <strong>${{ price }}</strong>
                </p>
                <button
                    class="btn btn-info btn-sm"
                >
                    View Product
                </button>
            </div>
        </div>
        <hr>
        <div class="px-2 pb-2">
            <small>brought to you by {{ product.brand }}</small>
        </div>
    </div>
</template>

<style scoped>
.product-box {
  border: 1px solid #efefee;
  box-shadow: 0 0 7px 4px #efefee;
  border-radius: 5px;
}

.image img {
    width: 100%;
    height: auto;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

.image h3 {
    font-size: 1.2rem;
}
</style>