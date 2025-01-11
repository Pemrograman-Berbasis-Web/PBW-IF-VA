# Pengenalan PHP

# Asal usul kemunculan PHP

Pada zaman dulu.. Web itu statis, cuma dibuat dengan HTML dan sedikit sentuhan CSS. Waktu itu memang teknologi web masih belum secanggih sekarang. Jadi saat orang membuka web, mereka sebenarnya cuma membuka file HTML dari web server.

![Statis](https://www.petanikode.com/img/php-konsep/web-statis.avif) 

*Source* : [petanikode](petanikode.com)

Masalah waktu itu:

Jika webnya statis, kita nggak bisa tau siapa saja yang buka dan berapa orang yang buka.

Karena itu, di tahun 1993.. Rasmus [Lerdorf membuat]([https://](https://en.wikipedia.org/wiki/Rasmus_Lerdorf)) bahasa pemrograman PHP.

![wikipedia](https://www.petanikode.com/img/php-konsep/rasmus-lerdorf.avif)
*Source* : [wikipedia/Rasmus Lerdorf](https://en.wikipedia.org/wiki/Rasmus_Lerdorf)

Awalnya PHP cuma dipakai sendiri oleh Rasmus Lerdorf, kemudian di-rilis ke publik di tahun 1995.

Dulu PHP dikenal sebagai singkatan:

PHP = P*ersonal Home Page*.

Tapi makin ke sini, singkatan itu berubah menjadi:

PHP = PHP: *Hypertext Preprocessor.*

Saat ini, PHP telah mencapai versi 8.3 dengan penambahan ekstensi dan perbaikan performa yang menjanjikan. 

![php](https://i.imgur.com/JY3h6EQ.png)
*Source* : [php.net](https://www.php.net/supported-versions.php)

# Alur Membuat Program PHP

Alur membuat program PHP dimulai dengan menulis program PHP. Setelah itu, menjalankannya di server.

Coba perhatikan gambar ini:

![petanikode](https://www.petanikode.com/img/php-konsep/alur-coding-php.avif)

Kita sebagai programmer menulis program PHP, kemudian kita upload ke server setelah program itu jadi.

Selanjutnya, saat pengunjung atau user membuka web.. Dia akan menerima HTML yang merupakan hasil dari eksekusi PHP.

![petanikode](https://www.petanikode.com/img/php-konsep/eksekusi-web-php.avif)

Tunggu.. 🤔

Apa nanti saat kita coding PHP, kita harus punya server?

Betul, kita harus punya server. Namun, server ini tidak harus beli dari hosting.

Kita bisa membuat server sendiri di komputer lokal (localhost) untuk menjalankan PHP. Bahkan, PHP juga sudah menyediakan server bawaan sendiri untuk keperluan *development*.

Kita butuh sewa server di layanan hosting saat nanti aplikasi web kita sudah jadi.


# Kelebihan PHP
  
Sebagai bahasa pemrograman, PHP memiliki banyak kelebihan antara lain:

- Komunitas yang besar
  
Tidak dapat dipungkiri bahwa komunitas PHP sangat besar dan tersebar diseluruh dunia. Di Indonesia saja ada banyak komunitas yang berafiliasi dengan PHP baik itu pembahasan PHP secara umum maupun pembahasan secara khusus misalnya tentang framework. Di facebook ada group PHP Indonesia yang membahas PHP secara umum, dan ada pula Symfony Framework Indonesia yang membahas secara khusus tentang framework Symfony. Tidak hanya itu, di Telegram, WhatsApp pun banyak bertebaran group yang membahas tentang PHP.

- *Resources* yang melimpah

Dikarenakan komunitasnya yang besar, tentu saja akan berdampak pada kemudahan mencari resources yang berhubungan dengan PHP baik itu permasalahan yang sering terjadi, library, software, CMS hingga framework PHP banyak sekali bertebaran dan dengan mudah dapat ditemukan dengan googling.

- Mudah dipelajari

PHP adalah bahasa pemrograman sejuta umat. Hampir semua orang yang pernah bergelut dengan dunia Web Development pasti pernah menggunakannya atau setidaknya pernah sekedar

mencobanya. Tutorial untuk memulai belajar PHP pun dengan mudah ditemukan dengan mengetikkan kata kunci pada mesin pencari.

- Simpel

PHP itu simpel. Syntax-nya sangat sederhana dan mudah sekali dipelajari. Saking simpelnya, untuk memulai belajar PHP kita tidak perlu melakukan setting apapun, cukup install paket software seperti XAMPP/LARAGON/MAMP atau WAMP maka Anda sudah dapat memulai belajar PHP.

- Mudah dan murah untuk *deployment*

Untuk *men-deploy* program PHP sangatlah mudah, kita cukup meng-upload ke server hosting yang harga juga sangat terjangkau bahkan ada yang gratis.

Dan masih banyak lagi kelebihan lainnya.

# Kekurangan PHP

Sebagai bahasa pemrograman, PHP memiliki kekurangan antara lain:

Banyak orang yang bilang kekurangan utama PHP adalah bahwa PHP bahasa yang [weak type]([https://](https://en.wikipedia.org/wiki/Strong_and_weak_typing)) dimana sebuah *variable* tidak memiliki tipe data sehingga menyulitkan ketika melakukan *debugging*. *Weak type* ini menyebabkan terjadinya [juggling]([https://](http://php.net/manual/en/language.types.type-juggling.php)) dimana sebuah *variable* yang tadinya berisi nilai `integer` misalnya dapat berubah menjadi berisi nilai `string` atau bahkan tipe data lainnya.

Selain weak type, PHP juga mempunya kekurangan lain yaitu inkonsistensi A[PI (Application Programming Interface)]([https://](https://en.wikipedia.org/wiki/Application_programming_interface)). API disini bukan Web API yang mengembalikan json tapi API disini adalah fungsi bawaan dari PHP yang menjadi *interface* atau tatap muka antara kita sebagai developer dan bahasa pemrograman PHP itu sendiri. 

Contoh paling mudah dari ketidakkonsistenan PHP adalah dalam hal penamaan fungsi misalnya antara fungsi `substr` dan `str_replace`.

Kenapa `substr` tidak dinamai `str_sub` ? Atau `str_replace` diganti jadi `replacestr` ? Inilah yang membuat para developer PHP malas untuk menghafalkan nama fungsi maupun urutan parameternya. 

Pada akhirnya kita lebih senang melihat dokumentasi resmi untuk melihat bagaimana sebuah fungsi bekerja.

# Market Share PHP

PHP memiliki [market share]([https://](https://kinsta.com/php-market-share/)) yang sangat tinggi. Pengaruh PHP pada pengembangan web tidak dapat disangkal. PHP telah menjadi teknologi utama selama lebih dari dua dekade, mendukung segala hal mulai dari blog sederhana hingga aplikasi perusahaan yang kompleks. 

![alt text](https://i.imgur.com/ZtOhsWN.png)

*Source*: [orientsoftware](https://www.orientsoftware.com/blog/most-popular-programming-languages/)