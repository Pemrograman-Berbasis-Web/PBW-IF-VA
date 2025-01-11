# Todo List API

API sederhana untuk aplikasi Todo List yang memungkinkan pengguna untuk mengelola tugas dengan menambah, menandai selesai, dan menghapus tugas.

## Fitur

- **Tambah Todo**: Menambahkan tugas baru.
- **Ambil Todos**: Mengambil semua tugas.
- **Update Todo**: Menandai tugas sebagai selesai atau tidak selesai.
- **Hapus Todo**: Menghapus tugas dari daftar.

## Endpoint API

### 1. `GET /api.php?action=list`
Mengambil daftar semua tugas.

### 2. `POST /api.php?action=add`
Menambahkan tugas baru.

**Body Request**:
```json
{
  "task": "Belajar PHP"
}
