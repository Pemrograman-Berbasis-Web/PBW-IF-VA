Berikut adalah versi yang lebih menarik untuk README.md Anda, dengan gaya yang lebih profesional dan terstruktur:  

---

# 🎓 To-Do List Perkuliahan  

**To-Do List Perkuliahan** adalah aplikasi web interaktif yang dirancang untuk membantu mahasiswa mengelola tugas-tugas perkuliahan dengan mudah. Proyek ini menyediakan fitur lengkap mulai dari manajemen tugas hingga pelacakan histori penyelesaian.  

---

## ✨ **Fitur Utama**  

### 1. 📋 **Manajemen Tugas**  
- Input nama mahasiswa dan jenis tugas yang akan dikerjakan.  
- Pilihan tugas tersedia melalui dropdown dengan berbagai mata kuliah.  
- Tambahkan tugas ke daftar hanya dengan satu klik.  

### 2. 📝 **Daftar Tugas (To-Do List)**  
- Menampilkan daftar tugas lengkap dengan informasi:  
  - Nama Mahasiswa  
  - ID Tugas  
  - Nama Tugas  
  - Status Tugas  
  - Waktu Pembuatan  
  - Waktu Pembaruan  
- **Status Tugas**: Tugas dapat diselesaikan atau dibatalkan dengan satu klik.  

### 3. 🕒 **Histori Tugas**  
- Semua tugas yang selesai atau dibatalkan akan disimpan dalam histori.  
- Informasi waktu penyelesaian atau pembatalan dapat dilacak dengan mudah.  

### 4. Button Rasengan **Untuk background tabel jadi Tranparant**  
- **Tombol Toggle Interaktif**:  
  - Klik tombol untuk mengubah tampilan background putih tabel menjadi transparant dan teks HISTORI dan juga teks tabelnya menjadi lebih jelas warnannya karena menyesuaikan alurnya, cocok untuk ingin melihat background video.mp4 pemandangan yang indah dan kalau ingin kembali seperti semula tampilannya bisa tinggal klik kembali.
  - Fitur ini berlaku untuk teks dalam tabel tugas, histori dan juga background tabel.  
- **Efek Animasi Tombol**:  
  - Rotasi pada ikon saat tombol diklik.  
  - Animasi skala yang halus untuk pengalaman visual yang lebih menarik.  

### 5. 🎥 **Video Background**  
- Aplikasi ini dilengkapi dengan latar belakang video yang berjalan terus-menerus, memberikan kesan modern dan dinamis.  

---

## 📂 **Struktur Folder**  
```
project-folder/  
│  
├── index.html               # File utama aplikasi  
├── assets/                  # Folder aset aplikasi  
│   ├── css/  
│   │   └── style.css        # File gaya untuk elemen HTML  
│   ├── js/  
│   │   └── script.js        # Logika aplikasi  
│   ├── bahan/  
│   │   └── video.mp4        # Video latar belakang  
│   └── egg.png           # Ikon untuk tombol toggle  
```  

---


## 🚀 **Cara Menjalankan Aplikasi**  
1. **Download atau Clone Proyek**  
   Pastikan semua file tersedia di dalam folder proyek Anda.  

2. **Buka File HTML**  
   Gunakan browser modern seperti **Google Chrome** atau **Mozilla Firefox** untuk membuka `index.html`.  

3. **Nikmati Aplikasi**  
   - Anda dapat menambahkan tugas, melacak status, atau melihat histori tugas.  
   - Gunakan tombol toggle untuk beralih ke mode gelap.  

---

## ⚙️ **Fungsi Penting dalam Kode**  

### ➕ **Menambah Tugas Baru**  
```javascript
document.getElementById("addTaskBtn").addEventListener("click", function() {  
    // Logika untuk menambahkan tugas baru ke tabel  
});  
```  

### 🌙 **Mengaktifkan Mode Gelap**  
```javascript
toggleButton.addEventListener("click", function() {  
    document.querySelectorAll(".todo-section, .history-section").forEach(section => {  
        section.classList.toggle("dark-mode");  
    });  
});  
```  

---



## 🏷️ **Lisensi**  
&copy; 2024 Virzan Pasa Nugraha. Semua Hak Dilindungi.  

---

README ini dirancang agar pengguna dapat memahami proyek secara menyeluruh dengan cepat. Jika Anda membutuhkan tambahan penjelasan atau modifikasi, beri tahu saya! 😊