<template>
    <Head :title="article.title" />

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-4">{{ article.title }}</h1>

                    <div class="p-4 border rounded shadow">
                        <p class="text-gray-700">{{ article.description }}</p>
                    </div>
                    <Link
                        :href="route('articles.index')"
                        class="inline-block mb-6 text-sm text-indigo-600 hover:underline"
                    >
                        ← Back to articles
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'

defineProps({
    article: Object,
    imageUrl: String,
})
</script>

