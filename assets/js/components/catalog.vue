<script setup>
import Legend from "@/components/legend.vue";
import {onMounted, ref} from "vue";
import axios from "axios";
import ProductList from "@/components/product/product-list.vue";

const products = ref([])

onMounted(async () => {
    const response = await axios.get('/api/products');

    products.value = response.data['hydra:member'];
})

const shippingMessage = ref('Shipping takes 10-12 weeks, and products probably won\'t work');
</script>

<template>
    <div>
        <div class="row">
            <div class="col-12">
                <h1>
                    Products
                </h1>
            </div>
        </div>

        <ProductList :products="products" />

        <div class="row">
            <Legend :legend="shippingMessage" />
        </div>
    </div>
</template>

<style scoped>

</style>