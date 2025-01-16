<script setup>
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Link, useForm, usePage } from "@inertiajs/vue3";

// Mendapatkan data pengguna dari props (menggunakan optional chaining untuk mencegah error jika data tidak ada)
const user = usePage().props.auth?.user || {
    name: "",
    email: "",
}; // fallback jika user tidak ditemukan

// Inisialisasi form dengan data pengguna (nama dan email)
const form = useForm({
    name: user.name, // Gunakan user.name jika ada, jika tidak fallback ke 'Muhammad Hilman'
    email: user.email, // Gunakan user.email jika ada
});
</script>

<template>
    <section>
        <header class="flex items-center space-x-4">
            <!-- Menampilkan gambar bulat pengguna, menggunakan gambar profil jika tersedia -->
            <img
                :src="user.profile_picture || '/images/default-avatar.png'"
                alt="Profile Picture"
                class="w-16 h-16 rounded-full border-2 border-gray-300"
            />
            <div>
                <h2
                    class="text-lg font-medium text-gray-900 dark:text-gray-100"
                >
                    Profile Information
                </h2>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    Update your account's profile information and email address.
                </p>
            </div>
        </header>

        <form
            @submit.prevent="form.patch(route('profile.update'))"
            class="mt-6 space-y-6"
        >
            <!-- Form Input untuk Nama -->
            <div>
                <InputLabel for="name" value="Name" />
                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <!-- Form Input untuk Email -->
            <div>
                <InputLabel for="email" value="Email" />
                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <!-- Tampilkan jika email belum diverifikasi -->
            <div v-if="mustVerifyEmail && user.email_verified_at === null">
                <p class="mt-2 text-sm text-gray-800 dark:text-gray-200">
                    Your email address is unverified.
                    <Link
                        :href="route('verification.send')"
                        method="post"
                        as="button"
                        class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"
                    >
                        Click here to re-send the verification email.
                    </Link>
                </p>

                <div
                    v-show="status === 'verification-link-sent'"
                    class="mt-2 text-sm font-medium text-green-600 dark:text-green-400"
                >
                    A new verification link has been sent to your email address.
                </div>
            </div>

            <!-- Tombol Simpan dan Indikasi Status -->
            <div class="flex items-center gap-4">
                <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                <Transition
                    enter-active-class="transition ease-in-out"
                    enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out"
                    leave-to-class="opacity-0"
                >
                    <p
                        v-if="form.recentlySuccessful"
                        class="text-sm text-gray-600 dark:text-gray-400"
                    >
                        Saved.
                    </p>
                </Transition>
            </div>
        </form>
    </section>
</template>
