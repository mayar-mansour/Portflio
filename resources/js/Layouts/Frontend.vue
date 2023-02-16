<script setup>
import Header from "@/Components/Frontend/Header.vue";
import Footer from "@/Components/Frontend/Footer.vue";
import { Head, Link } from '@inertiajs/vue3';
defineProps({
  skills: Object,
  projects: Object,
  profiles: Object,
  prof: Object,
  name: Object,
  services: Object,
  auth: Object,
});
</script>
<template>
<div class="bg-slate-200 dark:bg-slate-900">
    <!-- Header -->
    <Header  :profiles="profiles" :name="name"/>
    <main class="min-h-screen">
    <slot />
    </main>
    <!-- Footer -->
    <Footer />
</div>
</template>
