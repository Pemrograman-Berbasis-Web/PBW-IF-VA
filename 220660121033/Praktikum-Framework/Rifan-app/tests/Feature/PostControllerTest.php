<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    use RefreshDatabase;

    public function it_can_show_all_posts()
    {
        // Membuat beberapa post untuk diuji
        Post::factory()->count(3)->create();

        // Mengakses route index untuk melihat semua post
        $response = $this->get(route('posts.index'));

        // Memastikan status response adalah 200
        $response->assertStatus(200);

        // Memastikan ada 3 post dalam response
        $response->assertViewHas('posts', function ($posts) {
            return $posts->count() === 3;
        });
    }
    /** @test */
public function it_can_create_a_new_post()
{
    // Data untuk post baru
    $postData = [
        'title' => 'New Post',
        'body' => 'This is the body of the post',
    ];

    // Mengirim permintaan POST untuk menyimpan post baru
    $response = $this->post(route('posts.store'), $postData);

    // Memastikan post baru berhasil disimpan
    $this->assertDatabaseHas('posts', $postData);

    // Memastikan pengalihan ke route posts.index
    $response->assertRedirect(route('posts.index'));
    }
/** @test */
public function it_can_update_an_existing_post()
{
    // Membuat post yang akan diperbarui
    $post = Post::factory()->create();

    // Data yang akan diperbarui
    $updatedData = [
        'title' => 'Updated Post',
        'body' => 'This is the updated body',
    ];

    // Mengirim permintaan PUT untuk memperbarui post
    $response = $this->put(route('posts.update', $post), $updatedData);

    // Memastikan data di database diperbarui
    $this->assertDatabaseHas('posts', $updatedData);

    // Memastikan pengalihan ke route posts.index
    $response->assertRedirect(route('posts.index'));
    }
     /** @test */
public function it_can_delete_a_post()
{
    // Membuat post yang akan dihapus
    $post = Post::factory()->create();

    // Mengirim permintaan DELETE untuk menghapus post
    $response = $this->delete(route('posts.destroy', $post));

    // Memastikan post dihapus dari database
    $this->assertDatabaseMissing('posts', ['id' => $post->id]);

    // Memastikan pengalihan ke halaman sebelumnya
    $response->assertRedirect();
}
/** @test */
public function it_can_show_create_post_form()
{
    $response = $this->get(route('posts.create'));
    $response->assertStatus(200);
}

public function it_can_show_edit_post_form()
{
    // Membuat post yang akan diedit
    $post = Post::factory()->create();

    $response = $this->get(route('posts.edit', $post));
    $response->assertStatus(200);
    }
}
