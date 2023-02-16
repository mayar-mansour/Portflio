<template>
  <Head title="New Portflio" />
  <AuthenticatedLayout>
    <template #header>
      <h2
        class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
      >
        New Portflio
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
                <InputLabel for="logo" value="Profile Image" />

                <TextInput
                  id="logo"
                  type="file"
                  class="mt-1 block w-full "
                 @input="form.logo = $event.target.files[0]"

                />

                <InputError class="mt-2" :message="form.errors.logo" />
              </div>
              <div class="mt-2 ">
                <InputLabel for="job_title" value="Job Title" />

                <TextInput
                  id="job_title"
                  type="text"
                  class="mt-1 block w-full "
                v-model="form.job_title"

                />

                <InputError class="mt-2" :message="form.errors.job_title" />
              </div>
              <div class="mt-2 ">
                <InputLabel for="job_title_desc" value="Job Title Description" />

                <TextInput
                  id="job_title_desc"
                  type="text"
                  class="mt-1 block w-full "
                   v-model="form.job_title_desc"

                />

                <InputError class="mt-2" :message="form.errors.job_title_desc" />
              </div>
              <div class="mt-2 ">
                <InputLabel for="youtube_link" value="Youtube Channel Link if Exisit" />

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
                <InputLabel for="udemy_link" value="If you have Udemy Course / Insert The course Name" />

                <TextInput
                  id="udemy_link"
                  type="text"
                  class="mt-1 block w-full"
                  v-model="form.udemy_link"
                />
              </div>
              <div>
                <InputLabel for="course_name" value=" Udemy Course Link" />

                <TextInput
                  id="course_name"
                  type="text"
                  class="mt-1 block w-full"
                  v-model="form.course_name"
                />
              </div>
              <div>
                <InputLabel for="linkedin_link" value="Linkedin Link" />

                <TextInput
                  id="linkedin_link"
                  type="text"
                  class="mt-1 block w-full"
                  v-model="form.linkedin_link"
                />

                <InputError class="mt-2" :message="form.errors.linkedin_link" />
              </div>
              <div class="mt-2 ">
                <InputLabel for="about_title" value="About you" />

                <TextInput
                  id="about_title"
                  type="text"
                  class="mt-1 block w-full "
                 v-model="form.about_title"

                />
              </div>
              <div class="mt-2 ">
                <InputLabel for="about_desc" value="Description" />

                <TextInput
                  id="about_desc"
                  type="text"
                  class="mt-1 block w-full "
                v-model="form.about_desc"

                />
              </div>

              <div class="mt-2 ">
                <InputLabel for="contact_country" value="Country" />

                <TextInput
                  id="contact_country"
                  type="text"
                  class="mt-1 block w-full "
                  v-model="form.contact_country"
                />

                <InputError class="mt-2" :message="form.errors.contact_country" />
              </div>
              <div class="mt-2 ">
                <InputLabel for="contact_mail" value="Your Email" />

                <TextInput
                  id="contact_mail"
                  type="text"
                  class="mt-1 block w-full "
                  v-model="form.contact_mail"
                />

                <InputError class="mt-2" :message="form.errors.contact_mail" />
              </div>
              <div class="mt-2 ">
                <InputLabel for="contact_phone" value="Your phone" />

                <TextInput
                  id="contact_phone"
                  type="text"
                  class="mt-1 block w-full "
                  v-model="form.contact_phone"
                />

                <InputError class="mt-2" :message="form.errors.contact_phone" />
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

});
const form = useForm({
    name: "",
    user_id:"",
    company_name: "",
    job_title: "",
    job_title_desc: "",
    youtube_link: "",
    course_name: "",
    udemy_link: "",
    linkedin_link: "",
    about_title: "",
    about_desc: "",
    contact_company: "",
    contact_mail: "",
    contact_phone: "",
    contact_country: "",
    logo:null,
});

const submit = () => {
    form.post(route('portflio.store'));
};
</script>
