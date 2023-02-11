<template>
    <header class="bg-slate-100 py-6 shadow dark:bg-gray-800 dark:text-white">
        <div class="max-w-5xl mx-auto px-3">
            <h2 class="text-2xl font-bold">BLOG</h2>
        </div>
    </header>

    <main>
        <slot />
    </main>

    <footer class="bg-slate-100">
        <div class="md:grid md:grid-cols-3">
            <div class="bg-red-500">

            </div>

            <div class="bg-green-500">

            </div>

            <div class="bg-orange-500">

            </div>
        </div>
    </footer>
</template>
