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
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Manage Posts</h2> <!-- Judul halaman -->
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <!-- Tombol untuk membuat post baru, mengarah ke halaman create -->
                        <Link href="posts/create">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New
                                Post</button>
                        </Link>
                        <!-- Tabel yang menampilkan daftar posts -->
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <!-- Header tabel dengan kolom ID, Title, Content, dan Action -->
                                    <th class="border px-4 py-2">ID</th>
                                    <th class="border px-4 py-2">Title</th>
                                    <th class="border px-4 py-2">Content</th>
                                    <th class="border px-4 py-2" width="250px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Iterasi untuk menampilkan setiap post di dalam tabel -->
                                <tr v-for="post in posts" :key="post.id">
                                    <td class="border px-4 py-2">{{ post.id }}</td> <!-- Menampilkan ID post -->
                                    <td class="border px-4 py-2">{{ post.title }}</td> <!-- Menampilkan Title post -->
                                    <td class="border px-4 py-2">{{ post.body }}</td> <!-- Menampilkan Content post -->
                                    <td class="border px-4 py-2">
                                        <!-- Tombol untuk mengedit post, mengarah ke halaman edit -->
                                        <Link :href="`posts/${post.id}/edit`">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                        </Link>
                                        <!-- Tombol untuk menghapus post, memanggil fungsi deletePost -->
                                        <button
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2"
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