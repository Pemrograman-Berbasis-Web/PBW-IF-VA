<?php

// Menggunakan namespace yang diperlukan untuk migrasi di Laravel
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Mendeklarasikan kelas migrasi dengan anonymous class yang merupakan implementasi dari Migration
return new class extends Migration
{
    /**
     * Fungsi untuk menjalankan migrasi (membuat tabel).
     */
    public function up(): void
    {
        // Membuat tabel 'posts' dengan kolom-kolom yang sudah ditentukan
        Schema::create('posts', function (Blueprint $table) {
            // Menambahkan kolom id yang akan menjadi primary key dan auto-increment
            $table->id();
            
            // Menambahkan kolom 'title' yang bertipe string (biasanya untuk judul)
            $table->string('title');
            
            // Menambahkan kolom 'body' yang bertipe text (untuk konten atau tubuh artikel)
            $table->text('body');
            
            // Menambahkan kolom timestamps yang akan otomatis menambahkan kolom 'created_at' dan 'updated_at'
            $table->timestamps();
        });
    }

    /**
     * Fungsi untuk membatalkan migrasi (menghapus tabel).
     */
    public function down(): void
    {
        // Menghapus tabel 'posts' jika migrasi dibatalkan
        Schema::dropIfExists('posts');
    }
};