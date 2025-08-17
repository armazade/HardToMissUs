<template>
    <Layout title="Home">
        <Head :title="article.title" />

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="imageUrl">
                            <img :src="imageUrl" alt="Article image" class="mt-4 rounded shadow w-64 h-auto"/>
                        </div>
                        <h1 class="text-2xl font-bold mb-4">{{ article.title }}</h1>
                        <div class="p-4">
                            <p class="text-gray-700">{{ article.description }}</p>
                        </div>
                        <Link
                            :href="route('guest.index')"
                            class="inline-block mb-6 text-sm text-indigo-600 hover:underline"
                        >
                            ← Back to articles
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'
import Layout from "@/Layouts/Layout.vue";

defineProps({
    article: Object,
    imageUrl: String,
})
</script>

