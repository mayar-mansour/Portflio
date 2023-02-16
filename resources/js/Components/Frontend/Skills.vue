<script setup>
defineProps({
  skills: Object,
});
</script>
<template>
  <section class="bg-light-tail-100 dark:bg-dark-navy-500 py-16">
    <div class="container mx-auto">
    <div class="flex flex-col items-center text-center">
        <h2 class="section-title">Skills</h2>
      </div>
      <div class="grid grid-cols-8 md:grid-flow-col items-center text-center">
        <div
          class="flex items-center justify-center"
          v-for="skill in skills.data"
          :key="skill.id"
        ><div>
          <img :src="skill.image" :alt="skill.name" class="lg:h-20" />
          <h5 class=" mt-3 font-semibold text-lg text-accent text-md mb-[22px]">{{skill.name}}</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
