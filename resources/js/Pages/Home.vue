<script setup>
import { Head } from '@inertiajs/vue3';
import BlogContainer from '@/Shared/BlogContainer.vue';
import BlogLayout from '@/Layouts/BlogLayout.vue';
import BlogCard from '@/Components/BlogCard.vue';

defineProps({
    posts: Object,
});

</script>
<template>
    <BlogLayout>
        <BlogContainer class="py-24">
            <Head title="Home Page" />

            <div class="grid grid-cols-3 gap-12">
                <BlogCard :posts="posts" />
            </div>
        </BlogContainer>
    </BlogLayout>
</template>
