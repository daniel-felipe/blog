<script setup>
import { Head } from '@inertiajs/vue3';
import BlogLayout from '../Layouts/BlogLayout.vue';

defineProps({
    posts: Object,
});

</script>
<template>
    <BlogLayout>
        <Head title="Home Page" />

        <h2>Home Page Section</h2>
    </BlogLayout>
</template>
