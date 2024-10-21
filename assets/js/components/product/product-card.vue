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
    <div class="col-12 col-md-4 mb-2 pb-2">
        <div class="card border-dark">
            <img
                :alt="product.name"
                :src="product.imageFilename"
                class="card-img-top mb-2"
            >
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <h5 class="card-title mb-2 px-2">
                        {{ product.name }}
                    </h5>
                    <p class="p-0 card-text">
                        <strong>${{ price }}</strong>
                    </p>
                </div>

                <button
                    class="btn btn-outline-dark w-100"
                >
                    View Product
                </button>
            </div>
            <div class="card-footer">
                <small>brought to you by {{ product.brand }}</small>
            </div>
        </div>
    </div>
</template>

<style scoped>
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