<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
    posts: {
        type: Array,
        default: () => [],
    },
});

const form = useForm({});

const deletePost = (id) => {
    if (window.confirm("Are you sure you want to delete this post?")) {
        form.delete(`posts/${id}`);
    }
};
</script>

<template>
    <Head title="Manage Posts" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Manage Posts
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <Link :href="route('posts.create')">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3"
                            >
                                Create New Post
                            </button>
                        </Link>
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">ID</th>
                                    <th class="border px-4 py-2">Title</th>
                                    <th class="border px-4 py-2">Content</th>
                                    <th class="border px-4 py-2" width="250px">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="post in posts" :key="post.id">
                                    <td class="border px-4 py-2">
                                        {{ post.id }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ post.title }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ post.body }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        <Link :href="`posts/${post.id}/edit`">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                            >
                                                Edit
                                            </button>
                                        </Link>
                                        <button
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2"
                                            @click="deletePost(post.id)"
                                        >
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
