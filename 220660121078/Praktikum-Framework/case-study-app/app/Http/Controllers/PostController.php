<?php

// Menentukan namespace untuk controller ini, yaitu berada dalam folder App\Http\Controllers
namespace App\Http\Controllers;

// Mengimpor kelas Request untuk menangani request HTTP
use Illuminate\Http\Request;

// Mengimpor model Post untuk mengakses data pada tabel posts
use App\Models\Post;

// Mengimpor Inertia untuk merender tampilan (views) dengan menggunakan Inertia.js
use Inertia\Inertia;

class PostController extends Controller
{
    /**
     * Menampilkan daftar semua post.
     *
     * @return response()
     */
    public function index()
    {
        // Mengambil semua data post dari database
        $posts = Post::all();

        // Menggunakan Inertia untuk merender tampilan 'Post/Index' dan mengirimkan data posts
        return Inertia::render('Post/Index', ['posts' => $posts]);
    }

    /**
     * Menampilkan form untuk membuat post baru.
     *
     * @return response()
     */
    public function create()
    {
        // Menggunakan Inertia untuk merender tampilan 'Post/Create' untuk membuat post baru
        return Inertia::render('Post/Create');
    }

    /**
     * Menyimpan post baru ke dalam database.
     *
     * @return response()
     */
    public function store(Request $request)
    {
        // Membuat instance baru dari model Post dan mengisi kolom dengan data yang dikirimkan
        $post = new Post($request->all());

        // Menyimpan data post baru ke database
        $post->save();

        // Mengarahkan pengguna ke halaman daftar post (index)
        return redirect()->route('posts.index');
    }

    /**
     * Menampilkan form untuk mengedit post yang ada.
     *
     * @return response()
     */
    public function edit(Post $post)
    {
        // Menggunakan Inertia untuk merender tampilan 'Post/Edit' dan mengirimkan data post yang ingin diedit
        return Inertia::render('Post/Edit', ['post' => $post]);
    }

    /**
     * Memperbarui post yang ada di database.
     *
     * @return response()
     */
    public function update(Request $request, Post $post)
    {
        // Memperbarui data post dengan data yang dikirimkan melalui request
        $post->update($request->all());

        // Mengarahkan pengguna kembali ke halaman daftar post setelah pembaruan
        return redirect()->route('posts.index');
    }

    /**
     * Menghapus post dari database.
     *
     * @return response()
     */
    public function destroy(Post $post)
    {
        // Menghapus post yang dipilih dari database
        $post->delete();

        // Mengarahkan pengguna kembali ke halaman sebelumnya (biasanya daftar post)
        return redirect()->back();
    }
}