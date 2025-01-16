<?php
  
// Mendefinisikan namespace untuk model ini, yakni berada dalam folder App\Models
namespace App\Models;
  
// Mengimpor trait HasFactory yang memungkinkan penggunaan factory untuk model ini
use Illuminate\Database\Eloquent\Factories\HasFactory;

// Mengimpor kelas Model dari Eloquent yang merupakan dasar dari semua model di Laravel
use Illuminate\Database\Eloquent\Model;
  
// Mendeklarasikan kelas Post yang mewarisi dari Eloquent Model
class Post extends Model
{
    // Menggunakan trait HasFactory untuk memungkinkan pembuatan instance model menggunakan factory
    use HasFactory;
  
    // Menentukan kolom mana yang dapat diisi (mass assignment) untuk model ini
    protected $fillable = [
        'title', 'body' // Kolom 'title' dan 'body' dapat diisi secara massal
    ];
}