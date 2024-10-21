<script setup>
import Catalog from "@/components/catalog.vue";
import Sidebar from "@/components/sidebar.vue";
import {computed, ref} from "vue";

const sidebarCollapsed = ref(false);

const toggleSidebarCollapsed = () => {
    sidebarCollapsed.value = !sidebarCollapsed.value
}

const asideClasses = computed(() => {
    return sidebarCollapsed.value ? 'col-md-1 col-12'  : 'col-md-3';
})

const contentClasses = computed(() => {
    return sidebarCollapsed.value ? 'col-12 col-md-11'  : 'col-12 col-md-9';
})
</script>

<template>
    <div
        class="container-fluid mt-5 py-5"
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