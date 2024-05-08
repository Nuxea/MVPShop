<script setup>
import Catalog from "../components/catalog.vue";
import Sidebar from "../components/sidebar.vue";

</script>

<template>
    <div
        class="container-fluid mt-5 py-5"
        style="height: calc(100vh - 120px)"
    >
        <div class="row">
            <aside class="col-12 col-md-3 col-3">
                <Sidebar />
            </aside>
            <div class="col-12 col-md-9 col-9">
                <Catalog />
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>