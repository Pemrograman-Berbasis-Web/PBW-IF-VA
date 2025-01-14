<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'; // Mengimpor layout untuk halaman yang memerlukan autentikasi
import { Head, Link, useForm } from '@inertiajs/vue3'; // Mengimpor komponen dan hook dari Inertia.js

// Mendefinisikan props yang diterima oleh komponen ini, yaitu array posts
defineProps({
    posts: {
        type: Array,
        default: () => [], // Jika tidak ada data posts, akan mengirimkan array kosong sebagai default
    },
});

// Menginisialisasi form kosong dengan hook useForm dari Inertia.js, yang akan digunakan untuk mengelola penghapusan post
const form = useForm({});

// Fungsi untuk menghapus post
const deletePost = (id) => {
    form.delete(`posts/${id}`); // Menggunakan form.delete untuk mengirim permintaan DELETE ke endpoint yang sesuai
};
</script>

<template>

    <Head title="Manage Posts" /> <!-- Mengatur title halaman melalui komponen Head dari Inertia.js -->

    <AuthenticatedLayout> <!-- Layout yang digunakan untuk tampilan halaman yang terautentikasi -->
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Manage Posts</h2> <!-- Judul halaman -->
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <!-- Tombol untuk membuat post baru, mengarah ke halaman create -->
                        <Link href="posts/create">
                            <button
                                class="px-4 py-2 my-3 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Create New
                                Post</button>
                        </Link>
                        <!-- Tabel yang menampilkan daftar posts -->
                        <table class="w-full table-auto">
                            <thead>
                                <tr>
                                    <!-- Header tabel dengan kolom ID, Title, Content, dan Action -->
                                    <th class="px-4 py-2 border">ID</th>
                                    <th class="px-4 py-2 border">Title</th>
                                    <th class="px-4 py-2 border">Content</th>
                                    <th class="px-4 py-2 border" width="250px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Iterasi untuk menampilkan setiap post di dalam tabel -->
                                <tr v-for="post in posts" :key="post.id">
                                    <td class="px-4 py-2 border">{{ post.id }}</td> <!-- Menampilkan ID post -->
                                    <td class="px-4 py-2 border">{{ post.title }}</td> <!-- Menampilkan Title post -->
                                    <td class="px-4 py-2 border">{{ post.body }}</td> <!-- Menampilkan Content post -->
                                    <td class="px-4 py-2 border">
                                        <!-- Tombol untuk mengedit post, mengarah ke halaman edit -->
                                        <Link :href="`posts/${post.id}/edit`">
                                            <button
                                                class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Edit</button>
                                        </Link>
                                        <!-- Tombol untuk menghapus post, memanggil fungsi deletePost -->
                                        <button
                                            class="px-4 py-2 ml-2 font-bold text-white bg-red-500 rounded hover:bg-red-700"
                                            @click="deletePost(post.id)">Delete</button>
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