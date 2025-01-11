    Pengenalan Pemrograman Berbasis Objek
================
Pada bab ini kita akan membahas tentang apa itu pemrograman berbasis objek, kelebihan dan kekurangannya serta fitur apa saja yang harus ada dalam bahasa pemrograman yang mendukung pemrograman berbasis objek.

- [Pengenalan Pemrograman Berbasis Objek](#pengenalan-pemrograman-berbasis-objek)
- [Apa itu Pemrograman Berbasis Objek](#apa-itu-pemrograman-berbasis-objek)
- [Kelebihan Pemrograman Berbasis Objek](#kelebihan-pemrograman-berbasis-objek)
- [Kekurangan Pemrograman Berbasis Objek](#kekurangan-pemrograman-berbasis-objek)
- [Kenapa Harus Belajar OOP](#kenapa-harus-belajar-oop)
- [Fitur Dasar Yang Ada Pada OOP](#fitur-dasar-yang-ada-pada-oop)

# Apa itu Pemrograman Berbasis Objek

Menurut [wikipedia]([https://](https://id.wikipedia.org/wiki/Pemrograman_berorientasi_objek)), Pemrograman berorientasi objek merupakan paradigma pemrograman yang berorientasikan kepada objek. Semua data dan fungsi di dalam paradigma ini dibungkus dalam kelas-kelas atau objek-objek.

Dalam pemrograman berbasis objek, kita dituntut untuk memahami dan memetakan masalah kedalam *class* serta memecah masalah kedalam *class*-class yang lebih kecil dan simpel agar solusi yang dibuat lebih spesifik. Selanjutnya, *class*-class tersebut akan saling berkomunikasi dan berkolaborasi untuk memecahkan masalah yang kompleks. *Class*-class ini nantinya akan dirubah menjadi objek-objek pada saat runtime.

Setiap *class* dalam OOP mempunyai *method* atau fungsi serta *property* atau atribut. *Method* dalam *class* secara mudah diartikan sebagai segala kemampuan dari *class* atau apa saja yang dapat dilakukan oleh sebuah *class*. Sedangkan *property* adalah segala sesuatu yang dimiliki oleh *class*. Dalam OOP, *property* dan *method* dalam *class* saling bekerjasama membangun sebuah solusi dari suatu masalah.

Dalam beberapa referensi, *method* disebut juga sebagai function sedangkan *property* sering disebut juga sebagai attribute. Sehingga Anda tidak perlu bingung bila nantinya dibuku lain, Anda menemui istilah function dan attribute sebagai pengganti *method* dan *property*. Yang perlu Anda pahami bahwa function atau *method* adalah fitur atau kemampuan dari sebuah *class* sedangkan *property* atau attribute adalah segala sesuatu yang dimiliki oleh sebuah *class*.

![alt text](https://i.imgur.com/FfmVSlr.png)
*Source*: https://github.com

# Kelebihan Pemrograman Berbasis Objek

Pemrograman berbasis objek atau biasa disebut OOP, memiliki banyak keunggulan dibandingkan paradigma pemrograman lainnya. Keunggulan pemrograman berbasis objek antara lain

sebagai berikut:

- Modularitas: pogram yang dibuat dapat dipecah menjadi modul-modul yang lebih kecil dan nantinya digabungkan menjadi solusi yang utuh.
  
- Fleksibilitas: karena setiap solusi dibuat dalam bentuk class, ketika terjadi perubahan maka hanya class tersebut saja yang perlu dirubah.
  
- Ekstensibilitas: penambahan method atau property dapat dilakukan dengan sangat mudah.
  
- *Reuse*: class dapat digunakan berkali-kali untuk proyek maupun modul yang lain.
  
- Mudah dimaintain: karena setiap class berdiri sendiri, maka untuk memaintain class tersebut jauh lebih mudah.
  
- Keamanan code: adanya visibilitas memberikan fitur keamanan dimana developer lain tidak bisa dengan bebas menggunakan fitur yang ada pada sebuah objek.
  
- Waktu development lebih cepat: karena reusable otomatis dapat mempersingkat waktu pengembangan program.

Dan masih banyak lagi keunggulan OOP yang lainnya.

# Kekurangan Pemrograman Berbasis Objek

Selain kelebihan, pemrograman berbasis objek juga mempunyai kekurangan antara lain sebagai berikut:

- *Learning* curve yang lumayan tinggi.
- Ukuran program jauh lebih besar.
- Pemakaian *memory* lebih besar.
  
# Kenapa Harus Belajar OOP

Setelah mengetahui kelebihan dan kekurangan OOP, sekarang kita sampai kepada kesimpulan kenapa kita harus belajar OOP. Tapi sebelum kita membahas kenapa kita harus belajar OOP, ada baiknya kita coba melihat realita yang ada. Di ekosistem PHP sekarang ini banyak sekali framework mulai dari yang kecil seperti Slim, Lumen, dan Zend Expressive hingga framework berskala besar seperti Zend Framework,Laravel dan Symfony. 

Bila kita cermati, hampir semua framework dibangun dengan menggunakan paradigma OOP sehingga dengan menguasai OOP, kita dapat memaksimalkan fitur yang ada dalam framework tersebut.

Dan berikut adalah beberapa alasan kenapa kita harus belajar OOP:

- OOP sangat cocok untuk pembuatan aplikasi berskala besar.
- OOP merupakan gerbang untuk menguasai framework dengan maksimal.
- OOP dapat digunakan diberbagai bahasa pemrograman yang mendukung - OOP tidak hanya pada PHP.
- Dengan OOP kita dapat menerapkan *design pattern* dengan lebih mudah.

Dan masih banyak lagi alasan untuk belajar OOP.

# Fitur Dasar Yang Ada Pada OOP

Berikut adalah beberapa fitur dasar yang harus ada dalam bahasa pemrograman yang mendukung konsep OOP.

- Enkapsulasi

Enkapsulasi adalah sebuah fitur yang menggabungkan antara fungsionalitas dan data untuk menyembunyikan informasi. Enkapsulasi memungkinkan kita menggunakan fungsi dari sebuah objek tanpa perlu mengetahui detail dari apa yang terjadi dalam fungsi tersebut. Ekapsulasi mengatur bagaimana kita menggunakan objek, fungsi atau atribut apa saja yang dapat digunakan dan yang tidak dapat digunakan.

- Pewarisan

Pewarisan adalah sebuah fitur yang memungkinkan kita menggunakan fitur dari suatu class tanpa perlu mendefinisikan ulang semua *method* dan *property* yang ada pada class tersebut.

Pewarisan ini sangat bermanfaat jika kita ingin mempunyai sebuah class yang secara fitur mirip dengan class lain namun ada sebuah spesifikasi khusus yang spesifik dari class tersebut. 

Dalam OOP, class yang mewariskan sifat atau fitur disebut sebagai parent class sedangkan class yang diwarisi sifat atau fitur disebut c*hild class*. *Child class* memiliki semua fitur yang ada pada parent class ditambah dengan fitur spesifik miliknya sendiri.

![alt text](https://i.imgur.com/BaCs58Q.jpeg)
Source: http://www.adityawiraha.com

- Polimorfisme

Polimorfisme adalah sebuah fitur yang erat kaitannya dengan fitur sebelumnya yaitu pewarisan. Fitur ini secara mudah adalah sebuah kemampuan dari objek untuk merespon atau mengolah secara berbeda terhadap input yang sama.

Saya agak kesulitan dalam menjelaskan bagaimana polimorfisme bekerja, namun nanti kita akan memahami hal tersebut ketika membahas tentang pewarisan, abstract class, abtract method dan *interface*. 

Untuk sekarang, Anda cukup pahami bahwa *polimorfisme* adalah salah satu fitur yang harus ada dalam OOP dimana sebuah method yang sama pada class yang berbeda akan memberikan *output* yang berbeda pula jika digunakan.

Itulah 3 konsep dasar yang harus ada pada bahasa pemrograman yang mendukung konsep OOP. Meski secara konsep sama, biasanya setiap bahasa pemrograman mempunyai cara implementasi yang berbeda dari fitur-fitur diatas.