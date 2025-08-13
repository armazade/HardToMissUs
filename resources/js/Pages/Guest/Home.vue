<script setup>
import Layout from "@/Layouts/Layout.vue";

defineProps({
    articles: Array,
});
</script>

<template>
    <Layout
        title="Home"
    >
        <div class="max-w-2xl mx-auto text-center">
            <h1 class="text-3xl font-bold text-white-100 dark:text-white-100">Hard To Miss Us</h1>
            <div class="py-12">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <h1 class="text-2xl font-bold mb-4">Articles</h1>

                            <ul class="space-y-4">
                                <li
                                    v-for="article in articles"
                                    :key="article.id"
                                    class="p-4 border rounded shadow"
                                >
                                    <h1 >
                                        {{ article.title }}
                                    </h1>
                                    <p class="text-gray-700">{{ article.description }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <p class="mt-4 text-gray-600 dark:text-gray-400">
                test
            </p>
        </div>
    </Layout>
</template>
