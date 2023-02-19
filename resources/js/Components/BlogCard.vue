<script setup>
defineProps({
    posts: Object
});
</script>

<template>
    <div v-for="post in posts" :key="post.id" class="bg-white border rounded-md w-80 h-fit dark:bg-gray-800 dark:text-white dark:border dark:border-gray-700">
        <div class="flex flex-col">
            <div class="h-4/12 g-blue-100 rounded-t-md">
                <img src="https://via.placeholder.com/640x370" alt="thumbnail">
            </div>

            <div class="flex flex-col items-stretch gap-4 p-4 h-8/12">
                <div class="flex items-center justify-start space-x-3">
                    <div class="space-x-3">
                        <span class="px-2 font-bold text-gray-600 bg-gray-200 rounded-md">{{ post.category.name }}</span>
                        <span class="text-xs text-gray-500 dark:text-gray-400">{{ post.published_at }}</span>
                    </div>
                </div>

                <div class="py-6 min-h-fit">
                    <h2 class="text-2xl font-bold">{{ post.title.substr(1, 32) }}</h2>    
                </div>

                <div class="border-l-4 border-gray-300">
                    <p class="ml-3 text-gray-500">
                        {{ post.author.name }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>