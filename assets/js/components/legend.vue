<script setup>
import {ref} from "vue";

const shippingMessage = ref('Shipping takes 10-12 weeks, and products probably won\'t work');

</script>

<template>
    <span class="p-3">
        {{ shippingMessage }}
    </span>
</template>

<style scoped>

</style>