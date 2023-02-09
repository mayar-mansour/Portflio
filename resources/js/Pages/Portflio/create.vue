<template>
  <Head title="New Skill" />
  <AuthenticatedLayout>
    <template #header>
      <h2
        class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
      >
        New Porject
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div
          class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"
        >
          <div class="p-6 text-gray-900 dark:text-gray-100">
            <form class="p-4 row flex " @submit.prevent="submit">
          <div class="col max-w-md mx-auto sm:px-6 lg-px-8 ">
            <div>
            <InputLabel for="skill_id" value="Skill" />
           <select
              v-model="form.skill_id"
              id="skill_id"
              name="skill_id"
              class="
                mt-1
                block
                w-full
                pl-3
                pr-10
                py-2
                text-base
                border-gray-300
                focus:outline-none focus:ring-indigo-500 focus:border-indigo-500
                sm:text-sm
                rounded-md
                dark:bg-gray-900
              "
            >
              <option v-for="skill in skills" :key="skill.id" :value="skill.id">
                {{ skill.name }}
              </option>
            </select>
            </div>
                     <div>
            <InputLabel for="skill_id" value="Skill" />
           <select
              v-model="form.skill_id"
              id="skill_id"
              name="skill_id"
              class="
                mt-1
                block
                w-full
                pl-3
                pr-10
                py-2
                text-base
                border-gray-300
                focus:outline-none focus:ring-indigo-500 focus:border-indigo-500
                sm:text-sm
                rounded-md
                dark:bg-gray-900
              "
            >
              <option v-for="skill in skills" :key="skill.id" :value="skill.id">
                {{ skill.name }}
              </option>
            </select>
            </div>
              <div>
                <InputLabel for="name" value="Name" />

                <TextInput
                  id="name"
                  type="text"
                  class="mt-1 block w-full"
                  v-model="form.name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
              </div>
              <div>
                <InputLabel for="company_name" value="company_name" />

                <TextInput
                  id="company_name"
                  type="text"
                  class="mt-1 block w-full"
                  v-model="form.company_name"
                />

                <InputError class="mt-2" :message="form.errors.company_name" />
              </div>
              <div class="mt-2 ">
                <InputLabel for="logo" value="logo" />

                <TextInput
                  id="logo"
                  type="file"
                  class="mt-1 block w-full "
                 @input="form.logo = $event.target.files[0]"

                />

                <InputError class="mt-2" :message="form.errors.logo" />
              </div>
              <div class="mt-2 ">
                <InputLabel for="job_title" value="job_title" />

                <TextInput
                  id="job_title"
                  type="text"
                  class="mt-1 block w-full "
                v-model="form.job_title"

                />

                <InputError class="mt-2" :message="form.errors.job_title" />
              </div>
              <div class="mt-2 ">
                <InputLabel for="job_title_desc" value="job_title_desc" />

                <TextInput
                  id="job_title_desc"
                  type="text"
                  class="mt-1 block w-full "
                   v-model="form.job_title_desc"

                />

                <InputError class="mt-2" :message="form.errors.job_title_desc" />
              </div>
              <div class="mt-2 ">
                <InputLabel for="youtube_link" value="youtube_link" />

                <TextInput
                  id="youtube_link"
                  type="text"
                  class="mt-1 block w-full "
                  v-model="form.youtube_link"
                />

                <InputError class="mt-2" :message="form.errors.youtube_link" />
              </div>


              <div class="flex items-center justify-end mt-4">
              </div>
            </div>
        <div class="col max-w-md mx-auto sm:px-6 lg-px-8 ">

              <div>
                <InputLabel for="udemy_link" value="udemy_link" />

                <TextInput
                  id="udemy_link"
                  type="text"
                  class="mt-1 block w-full"
                  v-model="form.udemy_link"
                />
              </div>
              <div>
                <InputLabel for="linkedin_link" value="linkedin_link" />

                <TextInput
                  id="linkedin_link"
                  type="text"
                  class="mt-1 block w-full"
                  v-model="form.linkedin_link"
                />

                <InputError class="mt-2" :message="form.errors.linkedin_link" />
              </div>
              <div class="mt-2 ">
                <InputLabel for="about_title" value="about_title" />

                <TextInput
                  id="about_title"
                  type="text"
                  class="mt-1 block w-full "
                 v-model="form.about_title"

                />
              </div>
              <div class="mt-2 ">
                <InputLabel for="about_desc" value="about_desc" />

                <TextInput
                  id="about_desc"
                  type="text"
                  class="mt-1 block w-full "
                v-model="form.about_desc"

                />
              </div>
              <div class="mt-2 ">
                <InputLabel for="services_title" value="services_title" />

                <TextInput
                  id="services_title"
                  type="text"
                  class="mt-1 block w-full "
                   v-model="form.services_title"

                />
                <InputError class="mt-2" :message="form.errors.services_title" />
              </div>
              <div class="mt-2 ">
                <InputLabel for="contact_country" value="contact_country" />

                <TextInput
                  id="contact_country"
                  type="text"
                  class="mt-1 block w-full "
                  v-model="form.contact_country"
                />

                <InputError class="mt-2" :message="form.errors.contact_country" />
              </div>
              <div class="mt-2 ">
                <InputLabel for="contact_mail" value="contact_mail" />

                <TextInput
                  id="contact_mail"
                  type="text"
                  class="mt-1 block w-full "
                  v-model="form.contact_mail"
                />

                <InputError class="mt-2" :message="form.errors.contact_mail" />
              </div>
  <div class="flex items-center justify-end mt-4">


                <PrimaryButton
                  class="ml-4 bg-indigo-500"
                  :class="{ 'opacity-25': form.processing }"
                  :disabled="form.processing"
                >
                Store
                </PrimaryButton>
              </div>
        </div>
            </form>
            </div>
          </div>
        </div>
      </div>

  </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
defineProps({
  skills: Array,
});
const form = useForm({
    name: "",
    project_url: "",
    image: null,
    skill_id: "",
});

const submit = () => {
    form.post(route('projects.store'));
};
</script>
