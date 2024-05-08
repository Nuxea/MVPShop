<script setup>

import {ref} from "vue";

const collapsed = ref(false);
const categories = [
    {
        name: 'Dot Matrix Printers',
        link: '#',
    },
    {
        name: 'Iomega Zip Drives',
        link: '#',
    },
];
</script>

<template>
    <div
        :style="{ width: collapsed ? '70px' : 'auto' }"
        class="sidebar p-3 mb-5"
    >
        <h5 class="text-center">
            Categories
        </h5>
        <ul class="navbar-nav flex-column mb-4">
            <li class="nav-item">
                <a
                    class="nav-link"
                    href="/public"
                >All Products</a>
            </li>
            <li
                v-for="(category, index) in categories"
                :key="index"
                class="nav-item"
            >
                <a
                    class="nav-link"
                    :href="category.link"
                >{{ category.name }}</a>
            </li>
        </ul>

        <div class="d-flex justify-content-end">
            <button
                class="btn btn-secondary btn-sm"
                @click="collapsed = !collapsed"
                v-text="collapsed ? '>>' : '<<'"
            />
        </div>
    </div>
</template>

<style scoped>
.sidebar {
  border: 1px solid #efefee;
  box-shadow: 0 0 7px 4px #efefee;
  border-radius: 5px;
}

.sidebar ul li:hover {
  border-radius: 10px;
  background: #0d5aa7;
  padding: 2%;
  transition: all 1s;
}
</style>