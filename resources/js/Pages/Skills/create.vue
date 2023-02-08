<template>
  <Head title="New Skill" />
  <AuthenticatedLayout>
    <template #header>
      <h2
        class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
      >
        New Skill
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
                <InputLabel for="image" value="Image" />

                <TextInput
                  id="image"
                  type="file"
                  class="mt-1 block w-full "
                 @input="form.image = $event.target.files[0]"

                />

                <InputError class="mt-2" :message="form.errors.image" />
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

const form = useForm({
    name: '',
    image: null,
});

const submit = () => {
    form.post(route('skills.store'));
};
</script>
