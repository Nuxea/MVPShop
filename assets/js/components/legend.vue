<script setup>

defineProps({
    'legend': {
        type: String,
        required: true,
    },
})

</script>

<template>
    <span class="p-3">
        {{ legend }}
    </span>
</template>

<style scoped>

</style>