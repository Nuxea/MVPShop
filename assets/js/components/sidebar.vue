<script setup>

</script>

<template>
    <div class="sidebar p-3 mb-5">
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
            <li class="nav-item">
                <a
                    class="nav-link"
                    href="#"
                >Category A</a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link"
                    href="#"
                >Category B</a>
            </li>
        </ul>
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
  padding: 5%;
  transition: all 1s;
}
</style>