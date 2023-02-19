<script setup>
import { Head } from '@inertiajs/vue3';
import BlogContainer from '@/Shared/BlogContainer.vue';
import BlogLayout from '@/Layouts/BlogLayout.vue';
import BlogCard from '@/Components/BlogCard.vue';

defineProps({
    posts: Object,
    categories: Object,
});

</script>
<template>
    <BlogLayout>
        <BlogContainer class="py-24">
            <Head title="Home Page" />

            <div class="flex gap-3">
                <aside class="w-2/12 space-y-2 min-w-fit">
                    <h2 class="pl-3 font-semibold tracking-widest text-gray-400 uppercase">categorias</h2>

                    <p v-for="category in categories" :key="category.id" class="flex items-center gap-3 px-3 py-2 text-gray-600 transition rounded cursor-pointer hover:bg-gray-200 hover:text-blue-300 dark:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>


                        {{ category.name }}
                    </p>
                </aside>

                <div class="grid items-stretch w-10/12 grid-cols-3 gap-12">
                    <BlogCard :posts="posts.data" />
                </div>
            </div>
        </BlogContainer>
    </BlogLayout>
</template>
