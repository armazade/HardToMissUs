<script setup>
import { computed } from 'vue';
import Layout from "@/Layouts/Layout.vue";

defineProps({
  articles: Array,
});

</script>

<template>
  <Layout title="Home">
    <div class="py-2">
      <h1 class="max-w-2xl mx-auto text-3xl font-bold text-center mb-8 ">
        Hard To Miss Us
      </h1>
      <div class="w-full">
        <h2 class="text-2xl font-bold mb-6 "></h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-7">
          <div
              v-for="article in articles"
              :key="article.id"
              class="bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition-shadow duration-200 h-96"
          >
            <div class="p-4 flex flex-col h-full">
              <h3 class="text-lg font-semibold mb-2">{{ article.title }}</h3>
              <p class="text-black-700  flex-grow">{{ article.description }}</p>
            </div>
          </div>
        </div>
        <!-- Optionally, add pagination for more articles -->
      </div>
    </div>
  </Layout>
</template>
