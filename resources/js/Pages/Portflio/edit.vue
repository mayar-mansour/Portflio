<template>
  <Head title="New Skill" />
  <AuthenticatedLayout>
    <template #header>
      <h2
        class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
      >
        Edit your Portflio
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div
          class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"
        >
          <div class="p-6 text-gray-900 dark:text-gray-100">
          <div class="max-w-md mx-auto sm:px-6 lg-px-8 ">
            <form class="p-4" @submit.prevent="submit">
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
              <div class="mt-2 ">
                <InputLabel for="desc" value="Decsription" />

                <TextInput
                  id="desc"
                  type="file"
                  class="mt-1 block w-full "
                 v-model="form.desc"
/>
              </div>


              <div class="flex items-center justify-end mt-4">


                <PrimaryButton
                  class="ml-4 bg-indigo-500"
                  :class="{ 'opacity-25': form.processing }"
                  :disabled="form.processing"
                >
                Update
                </PrimaryButton>
              </div>
            </form>
            </div>
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
import { Inertia } from "@inertiajs/inertia";
const props = defineProps({
  profile: Object,
});

const form = useForm({
  name: props.profile?.name,
    company_name: props.profile?.company_name,
    job_title: props.profile?.job_title,
    job_title_desc:props.profile?.job_title_desc,
    youtube_link:props.profile?.youtube_link,
    course_name:props.profile?.course_name,
    udemy_link:props.profile?.udemy_link,
    linkedin_link:props.profile?.linkedin_link,
    about_title:props.profile?.about_title,
    about_desc:props.profile?.about_desc,
    contact_company:props.profile?.contact_company,
    contact_mail:props.profile?.contact_mail,
    contact_phone:props.profile?.contact_phone,
    logo:null,

});

const submit = () => {
  Inertia.post(`/portflio/${props.profile.id}`, {
    _method: "put",
    name: form.name,
    job_title: form.job_title,
    job_title_desc: form.job_title_desc,
    youtube_link: form.youtube_link,
    course_name: form.course_name,
    udemy_link: form.udemy_link,
    linkedin_link: form.linkedin_link,
    about_title: form.about_title,
    about_desc: form.about_desc,
    contact_company: form.contact_company,
    contact_mail: form.contact_mail,
    contact_phone: form.contact_phone,
    logo: form.logo,
  });
};
</script>
