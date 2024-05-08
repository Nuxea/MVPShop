<script setup>
import Legend from "../components/legend.vue";
import {ref} from "vue";

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
        <div class="row">
            <div class="col-12 col-md-6 mb-2 pb-2">
                TODO - load some products!
            </div>
        </div>
        <div class="row">
            <Legend :legend="shippingMessage" />
        </div>
    </div>
</template>

<style scoped>

</style>