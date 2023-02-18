<script setup>
import BlogContainer from '@/Shared/BlogContainer.vue';
</script>

<template>
    <header class="border py-6 shadow-md dark:bg-gray-800 dark:border-gray-700 dark:text-white">
        <BlogContainer>
            <h2 class="text-2xl font-bold">BLOG</h2>
        </BlogContainer>
    </header>

    <main class="bg-slate-100 dark:bg-gray-700 dark:border">
        <slot />
    </main>

    <footer class="bg-slate-100">
        <BlogContainer>
            <div class="md:grid md:grid-cols-3">
                <div class="bg-red-500">

                </div>

                <div class="bg-green-500">

                </div>

                <div class="bg-orange-500">

                </div>
            </div>
        </BlogContainer>
    </footer>
</template>
