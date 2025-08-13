<template>
    <Head title="Articles" />

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div v-if="$page.props.flash.success" class="mb-4 text-green-600">
                        {{ $page.props.flash.success }}
                    </div>
                    <h1 class="text-2xl font-bold mb-4">Articles</h1>

                    <ul class="space-y-4">
                        <li
                            v-for="article in articles"
                            :key="article.id"
                            class="p-4 border rounded shadow"
                        >
                            <Link
                                :href="route('admin.articles.create', article.id)"
                                class="block"
                            >
                                <h2 >
                                    {{ article.title }}
                                </h2>
                                <p class="text-gray-700">{{ article.description }}</p>
                            </Link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'

defineProps({
    articles: Array
});
</script>
