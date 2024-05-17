<script setup>
import ProductCard from "@/components/product/product-card.vue";

defineProps({
    products: {
        type: Array,
        required: true
    }
})
</script>

<template>
    <div class="row">
        <product-card
            v-for="product in products"
            :key="product['@id']"
            :product="product"
        />
    </div>
</template>

<style scoped>

</style>