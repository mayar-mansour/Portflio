<script setup>
import { Head, Link } from '@inertiajs/vue3';
import FrontendLayout from "@/Layouts/Frontend.vue";
import Hero from "@/Components/Frontend/Hero.vue";
import Promote from "@/Components/Frontend/Promote.vue";
import About from "@/Components/Frontend/About.vue";
import Services from "@/Components/Frontend/Services.vue";
import Skills from "@/Components/Frontend/Skills.vue";
import Portfolio from "@/Components/Frontend/Portfolio.vue";
import ContactMe from "../Components/Frontend/ContactMe.vue";
import { useDark, useToggle } from "@vueuse/core";


const isDark = useDark();
const toggleDark = useToggle(isDark);


defineProps({
  skills: Object,
  projects: Object,
  profiles: Object,
  services: Object,
  auth: Object,
});
</script>

<template>
    <Head title="Welcome to Portflio" />

 <FrontendLayout>
    <!-- Hero primary -->
    <Hero :profiles="profiles" :auth="auth"/>
    <!-- Promote tail-100 -->
    <Promote :profiles="profiles"/>
    <!-- About secondary -->
    <About :profiles="profiles"/>
    <!-- Skills tail-100 -->
    <Skills :skills="skills" />
    <!-- Portfolio primary -->
    <Portfolio :skills="skills" :projects="projects" />
    <!-- Services secondary -->
    <Services :services="services"/>
    <!-- Contact primary -->
    <ContactMe :profiles="profiles"/>
    <div class="p-6">
        <button @click="toggleDark()" class="px-4 py-2 text-white bg-gray-600 dark:bg-purple-700">Dark Mode</button>
                    </div>
  </FrontendLayout>
</template>
