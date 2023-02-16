<script setup>
import { Head, Link } from '@inertiajs/vue3';
defineProps({
  profiles: Object,
  test: Object,
  auth: Object,
});
</script>
<template>
  <section
    id="home"
    class="
      lg:h-[105vh]
      flex
      items-center
      bg-light-primary
      dark:bg-dark-navy-500
      py-32
      lg:py-0
      overflow-hidden
    "
  >
    <div
      class="container mx-auto h-full "
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

      <div class="flex flex-col md:flex-row items-center h-full pt-8 mt-8"
     v-for="profile in profiles.data" :key="profile.id">

        <div class="flex-1 flex flex-col items-center lg:items-start">
          <p class="text-lg text-accent text-md mb-[22px]">Hey, I'm Eng.<span class="font-bold text-2xl">{{ profile.name }}</span>! 👋</p>
          <h4
            class="
              text-4xl
              leading-[44px]
              md:text-2xl md:leading-tight
              lg:text-5xl lg:leading-[1.2]
              font-bold
              md:tracking-[-2px]
            "
          >
           {{ profile.job_title }}
          </h4>
          <p
            class="
              pt-4
              pb-8
              md:pt-6 md:pb-12
              max-w-[480px]
              text-lg text-center
              lg:text-left
            "
          >
           {{ profile.job_title_desc }}
          </p>
          <div class="pt-12" v-if="profile.youtube_link != null  && profile.youtube_link != null ">
            <h5
              class="
                text-lg
                flex
                justify-center
                lg:justify-start
                items-center
                text-black
                dark:text-white
                mb-2
              "
            >
              Follow me on
            </h5>
            <div class="flex items-center mb-6">
              <a v-if="profile.youtube_link != null"
                class="
                  w-12
                  h-12
                  rounded-full
                  flex
                  items-center
                  justify-center
                  border border-white
                  text-black
                  dark:text-white
                  hover:bg-light-secondary hover:border-light-secondary
                  dark:hover:bg-dark-secondary dark:hover:border-dark-secondary
                  mr-3
                  sm:mr-4
                "
                target="_blank"
                :href="profile.youtube_link"
              >
                <svg
                  width="16"
                  height="12"
                  viewBox="0 0 16 12"
                  class="fill-current"
                >
                  <path
                    d="M15.6645 1.88018C15.4839 1.13364 14.9419 0.552995 14.2452 0.359447C13.0065 6.59222e-08 8 0 8 0C8 0 2.99355 6.59222e-08 1.75484 0.359447C1.05806 0.552995 0.516129 1.13364 0.335484 1.88018C0 3.23502 0 6 0 6C0 6 0 8.79263 0.335484 10.1198C0.516129 10.8664 1.05806 11.447 1.75484 11.6406C2.99355 12 8 12 8 12C8 12 13.0065 12 14.2452 11.6406C14.9419 11.447 15.4839 10.8664 15.6645 10.1198C16 8.79263 16 6 16 6C16 6 16 3.23502 15.6645 1.88018ZM6.4 8.57143V3.42857L10.5548 6L6.4 8.57143Z"
                  />
                </svg>
              </a>
              <a v-if="profile.linkedin_link != null"
              target="_blank"
                class="
                  w-12
                  h-12
                  rounded-full
                  flex
                  items-center
                  justify-center
                  border border-white
                  text-black
                  dark:text-white
                  hover:bg-light-secondary hover:border-light-secondary
                  dark:hover:bg-dark-secondary dark:hover:border-dark-secondary
                  mr-3
                  sm:mr-4
                "
                  :href="profile.linkedin_link"
              >
                <svg
                  width="14"
                  height="14"
                  viewBox="0 0 14 14"
                  class="fill-current"
                >
                  <path
                    d="M13.0214 0H1.02084C0.453707 0 0 0.451613 0 1.01613V12.9839C0 13.5258 0.453707 14 1.02084 14H12.976C13.5432 14 13.9969 13.5484 13.9969 12.9839V0.993548C14.0422 0.451613 13.5885 0 13.0214 0ZM4.15142 11.9H2.08705V5.23871H4.15142V11.9ZM3.10789 4.3129C2.42733 4.3129 1.90557 3.77097 1.90557 3.11613C1.90557 2.46129 2.45002 1.91935 3.10789 1.91935C3.76577 1.91935 4.31022 2.46129 4.31022 3.11613C4.31022 3.77097 3.81114 4.3129 3.10789 4.3129ZM11.9779 11.9H9.9135V8.67097C9.9135 7.90323 9.89082 6.8871 8.82461 6.8871C7.73571 6.8871 7.57691 7.74516 7.57691 8.60323V11.9H5.51254V5.23871H7.53154V6.16452H7.55423C7.84914 5.62258 8.50701 5.08065 9.52785 5.08065C11.6376 5.08065 12.0232 6.43548 12.0232 8.2871V11.9H11.9779Z"
                  />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="flex flex-1 justify-end items-center h-full mt-8 md:mt-0">
          <img
            class="rounded-lg"
            :src="profile.logo"
            alt="Hero"
          />
        </div>
      </div>
    </div>
  </section>
</template>
