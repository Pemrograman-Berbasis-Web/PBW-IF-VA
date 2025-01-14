<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'; // Mengimpor layout yang memerlukan autentikasi
import { useForm, Link } from "@inertiajs/vue3"; // Mengimpor hook useForm dari Inertia.js untuk menangani form dan Link untuk navigasi

// Mendefinisikan properti yang diterima komponen, yaitu post
const props = defineProps({
    post: {
        type: Object, // Properti post adalah sebuah objek
        default: null, // Default nilainya adalah null
    },
});

// Inisialisasi form dengan nilai yang diambil dari props.post, untuk mengedit post yang ada
const form = useForm({
    title: props.post.title, // Menyusun nilai awal untuk field title menggunakan props.post.title
    body: props.post.body,   // Menyusun nilai awal untuk field body menggunakan props.post.body
});

// Fungsi untuk mengirimkan data form (PUT request) ke backend
const submit = () => {
    form.put(`/posts/${props.post.id}`); // Mengirim form dengan metode PUT ke URL untuk update post dengan ID yang sesuai
};
</script>

<template>

    <Head title="Manage Posts" /> <!-- Mengatur judul halaman menjadi "Manage Posts" menggunakan Inertia Head -->

    <AuthenticatedLayout> <!-- Menggunakan layout yang membutuhkan autentikasi -->
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Edit Post</h2> <!-- Header halaman dengan judul "Edit Post" -->
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <!-- Tombol untuk kembali ke halaman daftar posts -->
                        <Link href="/posts">
                            <button class="px-4 py-2 my-3 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                                Back
                            </button>
                        </Link>

                        <!-- Form untuk mengedit post -->
                        <form @submit.prevent="submit"> <!-- Mencegah form melakukan submit standar dan memanggil fungsi submit -->
                            <div class="mb-4">
                                <!-- Label dan input untuk field title -->
                                <label for="title" class="block mb-2 text-sm font-bold text-gray-700">
                                    Title:
                                </label>
                                <input 
                                    type="text"
                                    id="title"
                                    v-model="form.title" <!-- Mengikat input dengan form.title -->
                                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    placeholder="Enter Title"
                                />
                            </div>

                            <div class="mb-4">
                                <!-- Label dan textarea untuk field body -->
                                <label for="body" class="block mb-2 text-sm font-bold text-gray-700">
                                    Body:
                                </label>
                                <textarea
                                    id="body"
                                    v-model="form.body" <!-- Mengikat textarea dengan form.body -->
                                    placeholder="Enter Body"
                                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                ></textarea>
                            </div>

                            <!-- Tombol untuk mengirimkan form -->
                            <button 
                                type="submit"
                                class="px-4 py-2 my-3 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>