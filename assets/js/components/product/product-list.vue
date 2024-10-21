<script setup>
import ProductCard from "@/components/product/product-card.vue";
import Loading from "@/components/loading.vue";

defineProps({
    products: {
        type: Array,
        required: true
    }
})
</script>

<template>
    <div class="row">
        <div class="col-12">
            <div class="mt-4">
                <Loading v-show="products.length === 0" />
            </div>
        </div>
        <product-card
            v-for="product in products"
            v-show="products.length > 0"
            :key="product['@id']"
            :product="product"
        />
    </div>
</template>

<style scoped>

</style>