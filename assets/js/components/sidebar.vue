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
        :class="collapsed ? 'collapsed' : ''"
        class="sidebar p-3 mb-5"
    >
        <div class="d-flex justify-content-end">
            <button
                class="btn btn-outline-light btn-sm px-3 py-2"
                @click="collapsed = !collapsed"
                v-text="collapsed ? '>' : '<'"
            />
        </div>
        
        <div v-if="!collapsed">
            <hr>

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

.collapsed {
  width: 70px;
}

</style>