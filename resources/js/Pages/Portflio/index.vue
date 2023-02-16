<template>
    <Head title="profiles Index" />
    <AuthenticatedLayout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
            >
                profiles
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100"  >
                        <div v-if="!prof" class="flex justify-end m-2 p-2">
                            <Link
                                :href="route('portflio.create')"
                                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md"
                            >
                                New portflio Profile
                            </Link>
                        </div>
   <div class="overflow-x-auto relative" v-else>
        <table
            class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
          >
            <thead
              class="
                text-xs text-gray-700
                uppercase
                bg-gray-50
                dark:bg-gray-700 dark:text-gray-400
              "
            >
              <tr>
                <th scope="col" class="py-3 px-6"></th>
                <th scope="col" class="py-3 px-6">Name</th>
                <th scope="col" class="py-3 px-6">Image</th>
                <th scope="col" class="py-3 px-6">Action</th>
              </tr>
            </thead>
             <tbody>
              <tr
                v-for="profile in profiles.data"
                :key="profile.id"
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
              >
                <th
                  scope="row"
                  class="
                    py-4
                    px-6
                    font-medium
                    text-gray-900
                    whitespace-nowrap
                    dark:text-white
                  "
                >
                </th>
                <td class="py-4 px-6">{{ profile.name }}</td>

                <td class="py-4 px-6">
                  <img :src="profile.logo" class="w-12 h-12 rounded-full" />
                </td>
                <td class="py-4 px-6">
                  <Link
                    :href="route('portflio.edit', profile.id)"
                    class="font-medium text-blue-500 hover:text-blue-700 mr-2"
                    >Edit</Link
                  >
                  <Link
                    :href="route('portflio.destroy', profile.id)"
                    method="delete"
                    as="button"
                    type="button"
                    class="font-medium text-red-500 hover:text-red-700 mr-2"
                    >Delete</Link
                  >
                </td>
              </tr>
            </tbody>
          </table>
        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head,Link } from '@inertiajs/vue3';
defineProps({
  profiles: Array,
  prof: Array,
});

</script>
