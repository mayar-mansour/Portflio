<script setup>
import { Head, Link } from '@inertiajs/vue3';
defineProps({
  profiles: Array,
  prof: Object,
  test: Object,
});
</script>
<template>
  <div class="bg-light-tail-100 dark:bg-dark-primary" >
    <div
      class="
        container
        mx-auto
        py-12
        px-4
        sm:px-6
        lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8
      "
      v-for="profile in profiles.data" :key="profile.id"
    >
      <h4
        class="
          text-2xl
          font-bold
          tracking-tight
          text-light-tail-500
          dark:text-dark-navy-100
          sm:text-3xl
        "
      >

        <p class=" pb-2">Want to get My course</p>
        <span class="block pb-2">Ready to dive in?</span>
        <span class="block text-dark-primary dark:text-white"
          >{{profile.course_name}}</span
        >
      </h4>
      <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
        <div class="inline-flex rounded-md shadow">
          <a target="_blank"
            :href="profile.udemy_link"
            class="
              inline-flex
              items-center
              justify-center
              rounded-md
              border border-transparent
              bg-light-secondary
              dark:bg-dark-secondary
              px-5
              py-3
              text-base
              font-medium
              text-dark-primary
              dark:text-white
              hover:bg-light-primary
              dark:hover:bg-dark-primary
            "
            >Get the Course</a
          >
        </div>
      </div>
    </div>
  </div>
</template>
