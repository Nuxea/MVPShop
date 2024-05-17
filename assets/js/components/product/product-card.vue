<script setup>

defineProps({
    product: {
        type: Object,
        required: true,
    }
})
</script>

<template>
    <div class="col-12 col-md-6 mb-2 pb-2">
        {{ product.name }}
    </div>
</template>

<style scoped>

</style>