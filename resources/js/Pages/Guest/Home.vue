<script setup>
import Layout from "@/Components/Layout.vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    auth: Object,
});
</script>

<template>
    <Layout
        title="Home"
        :canLogin="canLogin"
        :canRegister="canRegister"
        :auth="auth"
    >
        <div class="max-w-2xl mx-auto text-center">
            <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200">Hard To Miss Us</h1>
            <p class="mt-4 text-gray-600 dark:text-gray-400">
            </p>
        </div>
    </Layout>
</template>
