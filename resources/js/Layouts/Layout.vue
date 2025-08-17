<script setup>
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    title: String,
    canLogin: Boolean,
    canRegister: Boolean,
    auth: Object,
});
</script>

<template>
    <Head :title="title" />

    <div class="flex flex-col min-h-screen bg-white">
        <!-- Navbar -->
        <header class="p-4 flex justify-between items-center border-b dark:border-gray-700">
            <Link href="/" class="text-lg font-bold text-white-100 dark:text-white-100">
                HTMU
            </Link>

            <h1 class="max-w-2xl mx-auto text-2xl font-bold text-center">
                Hard To Miss Us
            </h1>

            <nav>
                <template v-if="canLogin">
                    <template v-if="auth?.user">
                        <Link href="/dashboard" class="text-sm text-gray-600 dark:text-gray-400">Dashboard</Link>
                    </template>
                    <template v-else>
                        <Link href="/login" class="text-sm text-gray-600 dark:text-gray-400">Log in</Link>
                        <Link v-if="canRegister" href="/register" class="ml-4 text-sm text-gray-600 dark:text-gray-400">Register</Link>
                    </template>
                </template>
            </nav>
        </header>

        <!-- Main Content -->
        <main class="flex-grow p-6">
            <slot />
        </main>

        <!-- Footer -->
        <footer class="p-4 text-center border-t dark:border-gray-700">
            <p class="text-sm text-gray-600 dark:text-gray-400">
                Hard To Miss Us © {{ new Date().getFullYear() }} All rights reserved
            </p>
        </footer>
    </div>
</template>
