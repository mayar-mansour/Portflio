<script setup>
import { Head, Link } from '@inertiajs/vue3';
defineProps({
  profiles: Object,
  test: Object,
});
</script>
<template>
  <section id="about" class="section bg-light-secondary dark:bg-dark-secondary">
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
    v-for="profile in profiles.data" :key="profile.id"
    >
      <div class="flex flex-col xl:flex-row gap-24">
        <img
          class="object-cover h-full w-[566px] md:mx-auto lg:mx-0 rounded-2xl"
          :src="profile.logo"
          alt="about"
        />
        <div
          class="
            flex flex-col
            items-center
            text-center
            lg:items-start lg:text-left
          "
        >
          <div class="flex flex-col">
            <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3">
              About Me
            </h2>
            <P class="mb-4 text-accent">{{ profile.about_title }}</P>
            <hr class="mb-8 opacity-90 dark:opacity-5" />
            <p class="mb-8">
            {{ profile.about_desc }}
            </p>
          </div>
          <h2 class="btn btn-md bg-accent text-light-tail-100">
 Contact me :
          </h2>
<span>{{profile.contact_mail}}</span>
 <br>
 <span>{{profile.contact_phone}}</span>
        </div>
      </div>
    </div>
  </section>
</template>
