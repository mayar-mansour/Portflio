<template>
    <Head title="Skills Index" />
    <AuthenticatedLayout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
            >
                Skills
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="flex justify-end m-2 p-2">
                            <Link
                                :href="route('skills.create')"
                                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md"
                            >
                                New Skill
                            </Link>
                        </div>
    <div class="overflow-x-auto relative">
       
        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
defineProps({
  skills: Array,
});
</script>
