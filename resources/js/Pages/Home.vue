<script setup>
import { Head, Link } from '@inertiajs/vue3';
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

            <div class="flex flex-col items-center gap-3 md:flex-row md:items-start md:justify-start">
                <aside class="px-3 mb-6 space-y-2 text-center min-w-fit md:w-2/12 md:text-start">
                    <h2 class="pl-3 font-semibold tracking-widest text-gray-400 uppercase">categorias</h2>

                    <p v-for="category in categories" :key="category.id" class="flex items-center justify-center gap-3 px-3 py-2 text-gray-600 transition rounded cursor-pointer md:justify-start hover:bg-gray-200 hover:text-gray-800 dark:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hidden w-4 h-4 md:block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>

                        {{ category.name }}
                    </p>
                </aside>

                <div class="w-10/12">
                    <div class="grid items-stretch grid-cols-1 gap-12 justify-items-center lg:grid-cols-2 xl:grid-cols-3">
                        <BlogCard :posts="posts.data" />
                    </div>

                    <div class="flex items-center justify-center py-12">                        
                        <Link
                            v-for="(link, index) in posts.meta.links"
                            :key="index"
                            :href="link.url ?? '#'"
                            class="px-4 py-2 rounded border mx-0.5 bg-white "
                            :class="{ 'text-gray-500': ! link.url, 'font-bold' : link.active }"
                            v-html="link.label"
                            preserve-scroll
                        />
                    </div>
                </div>
            </div>
        </BlogContainer>
    </BlogLayout>
</template>
