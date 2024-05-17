<script setup>
import Catalog from "@/components/catalog.vue";
import Sidebar from "@/components/sidebar.vue";
import {computed, reactive, ref} from "vue";

const sidebarCollapsed = ref(false);

const toggleSidebarCollapsed = reactive(() => {
    sidebarCollapsed.value = !sidebarCollapsed.value
})

const asideClasses = computed(() => {
    return sidebarCollapsed.value ? 'col-md-1 col-12'  : 'col-md-3 col-3';
})

const contentClasses = computed(() => {
    return sidebarCollapsed.value ? 'col-12 col-md-11'  : 'col-12 col-md-9';
})
</script>

<template>
    <div
        class="container-fluid mt-5 py-5"
        style="height: calc(100vh - 120px)"
    >
        <div class="row">
            <aside :class="asideClasses">
                <Sidebar
                    :collapsed="sidebarCollapsed"
                    @toggle-collapsed="toggleSidebarCollapsed"
                />
            </aside>
            <div :class="contentClasses">
                <Catalog />
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>