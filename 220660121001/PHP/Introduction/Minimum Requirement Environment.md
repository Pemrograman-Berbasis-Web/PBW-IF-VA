# Minimum Requirement Environment
Bab ini berguna untuk menyamakan lingkungan pengembangan sehingga kedepannya tidak terjadi hal-hal yang tidak diharapkan.

# Versi PHP Minimum

Untuk Versi PHP yang akan kita gunakan sebagai acuan adalah PHP versi 8.2.12 dan karena kebetulan saya menggunakan macOS sebagai lingkungan pengembangan, saya menggunakan paket software seperti [MAMP]([https://](https://www.mamp.info/en/mac/)). 

Bila Anda terbiasa dengan paket software maka saya menyarankan untuk menggunakan XAMPP/LARAGON dengan versi PHP yang sesuai.

Untuk men-download [XAMPP]([https://](https://www.apachefriends.org/)) dan [LARAGON]([https://](https://laragon.org/download/)), Anda dapat langsung mengunjungi halaman resminya kemudian pilih sistem operasi sesuai yang Anda gunakan dan pastikan Anda men-download versi PHP yang sesuai. Langkah selanjutnya tinggal Anda install pada sistem operasi yang Anda gunakan.

# Menjalankan PHP Melalui Command Line

Kemudian Anda bisa menjalankan PHP melalui command line menggunakan [XAMPP]([https://](https://www.apachefriends.org/)) dan [LARAGON]([https://](https://laragon.org/download/)).

Setelah melakukan instalasi PHP, tahap berikutnya adalah kita dapat menjalankan perintah PHP melalui `terminal/command line`. Untuk mengetes apakah kita sudah dapat menjalankan PHP melalui command line, kita dapat melakukannya dengan membuka terminal (untuk Linux dan MacOS) atau *command prompt* (untuk Windows) lalu mengetikkan perintah berikut:

```bash
php -v
```
![mcaos](https://i.imgur.com/h7FnX0G.png)

Bila belum, maka Anda dapat mendaftarkan PHP kedalam *environment variable.* Untuk Windows dapat mengikuti tutorial pada [link]([https://](https://stackoverflow.com/questions/10753024/how-to-access-the-command-line-for-xampp-on-windows/46408671#46408671)) ini. Untuk Linux dan MacOS dapat mengikuti tutorial pada [link]([https://](https://stackoverflow.com/questions/16830405/laravel-requires-the-mcrypt-php-extension/17192458#17192458)) ini. 

Anda hanya cukup mengganti lokasi` (path) PHP` sesuai dengan direktori atau folder tempat Anda meng-install XAMPP/LARAGON.

Windows : System Properties --> *Environment Variables* --> *Path*

![1](https://i.imgur.com/CspXKp0.png)

![2](https://i.imgur.com/yizuK60.png)

![3](https://i.imgur.com/qUP5uuv.png)


Bila cara tersebut tidak dapat bekerja, Anda dapat mencoba me-restart PC Anda kemudian coba jalankan PHP melalui *command line* kembali.

Anda juga dapat menjalankan program PHP secara online melalui **online PHP shell** pada link berikut: [https://3v4l.org/](https://3v4l.org/).