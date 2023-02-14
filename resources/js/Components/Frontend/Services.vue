<script setup>
import { Head, Link } from '@inertiajs/vue3';
defineProps({
  services: Object,
});
</script>
<template>
  <section
    id="services"
    class="section bg-light-secondary dark:bg-dark-secondary"
  >
    <div
      class="container mx-auto"
      v-motion
      :initial="{
        opacity: 0,
        y: 100,
      }"
      :visible="{
        opacity: 1,
        y: 0,
      }"
    >
      <div class="flex flex-col items-center text-center">
        <h2 class="section-title">What I do for clients</h2>
        <p class="subtitle">

        </p>
      </div>
      <div class="grid lg:grid-cols-4 gap-8">
        <div class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl"  v-for="service in services.data" :key="service.id">
          <div
            class="
              text-accent
              rounded-sm
              w-12
              h-12
              flex
              justify-center
              items-center
              mb-24
              text-[28px]
            "
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-24 w-24"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"
              />
            </svg>
          </div>
          <h4 class="text-xl font-medium mb-2">{{service.name}}</h4>
          <p class="white font-medium ">
            {{service.desc}}
          </p>
        </div>
      </div>
    </div>
  </section>
</template>
