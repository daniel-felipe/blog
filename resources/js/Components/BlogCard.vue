<script setup>
defineProps({
    posts: Object
});
</script>

<template>
    <div v-for="post in posts" :key="post.id" class="w-80 bg-white min-h-fit rounded-md border dark:bg-gray-800 dark:text-white dark:border dark:border-gray-700">
        <div class="grid grid-rows-2">
            <div class="bg-blue-200 h-48 rounded-t-md"></div>

            <div class="p-4 flex flex-col justify-between gap-4">
                <div class="space-x-3">
                    <span class="px-2 rounded-md bg-gray-200 text-gray-600 font-bold">{{ post.category.name }}</span>
                    <span class="text-xs text-gray-500 dark:text-gray-400">{{ post.published_at }}</span>
                </div>

                <h2 class="text-2xl font-bold">{{ post.title }}</h2>

                <p class="text-gray-600">
                    {{ post.description }}
                </p>
            </div>
        </div>
    </div>
</template>