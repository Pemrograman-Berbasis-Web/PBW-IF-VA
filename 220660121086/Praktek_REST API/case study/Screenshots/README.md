# To-Do List REST API

---

## 📍 **URL Path**
   **URL Path API**: 
   ```
   http://path/nama_folder_kamu/api.php
   ```
   Misalnya saya menjalankan project ini di localhost dengan nama folder `febrian_todolist`, maka URL-nya:
   ```
   http://localhost/febrian_todolist/api.php
   ```
   Ganti `path` dan `nama_folder` sesuai dengan direktori di server kamu, ya!

---

## 📜 API Endpoints

### 1. **GET - Melihat Daftar Tugas**
   Endpoint ini digunakan untuk mengambil daftar tugas yang sudah ada di database. Kalau kamu pengen lihat semua tugas yang belum atau sudah selesai, cukup gunakan metode **GET**.

   **Request:**
   ```
   GET http://localhost/febrian_todolist/api.php?action=get
   ```

   **Response (JSON):**
   ```json
   [
     {
       "id": "94",
       "task": "Belajar REST API",
       "is_completed": "0",
       "created_at": "2024-11-17 08:08:51",
       "updated_at": "2024-11-17 08:08:51"
     },
     {
       "id": "93",
       "task": "Startup Digital - Figma + bagian coding",
       "completed": "1",
       "created_at": "2024-11-17 08:04:29",
       "updated_at": "2024-11-17 08:08:03"
     }
   ]
   ```
   **Penjelasan:**
   - **id**: ID unik untuk setiap tugas.
   - **task**: Deskripsi dari tugas yang perlu dikerjakan.
   - **completed**: Status tugas (0 = belum selesai, 1 = selesai).

### 2. **POST - Menambahkan Tugas Baru**
   Untuk menambahkan tugas baru, gunakan metode **POST** dengan body berupa **raw JSON**.

   **Request:**
   ```
   POST http://localhost/febrian_todolist/api.php?action=add
   ```
   **Body (raw JSON):**
   ```json
   {
     "task": "Belajar Rest API"
   }
   ```

   **Response:**
   ```json
   {
     "message": "Todo added successfully!"
   }
   ```

   **Penjelasan:**
   - Kamu cukup mengirimkan JSON berisi **task** yang ingin ditambahkan.
   - Server akan menambah tugas baru ke dalam database.

### 3. **DELETE - Menghapus Tugas**
   Untuk menghapus tugas, kamu bisa menggunakan metode **DELETE** dengan mengirimkan body berupa **raw JSON** yang berisi ID tugas.

   **Request:**
   ```
   DELETE http://localhost/febrian_todolist/api.php?action=delete
   ```
   **Body (raw JSON):**
   ```json
   {
     "id": 93
   }
   ```

   **Response:**
   ```json
   {
     "status": "success",
     "message": "Task deleted successfully!"
   }
   ```

   **Penjelasan:**
   - Pada request ini, body dikirimkan dalam format **raw JSON** dengan key `id` yang berisi ID tugas yang ingin dihapus.
   - Kamu tidak perlu menambahkan `id` di URL, cukup menggunakan body JSON seperti di atas.

### 4. **PUT - Mengupdate Status Tugas**
   Untuk memperbarui status tugas menjadi selesai atau belum selesai, gunakan metode **PUT** dengan body berupa **raw JSON**.

   **Request:**
   ```
   PUT http://path/nama_folder/api.php?action=update&id=2
   ```
   **Body (raw JSON):**
   ```json
   {
     "completed": 1
   }
   ```

   **Response:**
   ```json
   {
     "status": "success",
     "message": "Task updated successfully!"
   }
   ```

   **Penjelasan:**
   - Kamu cukup mengirimkan JSON berisi **completed** dengan nilai `1` (selesai) atau `0` (belum selesai).
   - Parameter `id` digunakan untuk menentukan tugas mana yang akan diupdate.

---

## Penulis

Dibuat oleh:  
**Agung Febrian**  
NIM: 220660121086  
Kelas: IF-VA