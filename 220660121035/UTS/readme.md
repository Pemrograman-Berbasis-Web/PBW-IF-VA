- <code>index.php</code>
Kode yang di tambahkan 
```php
header("Location: index.php");
```
pada <code>index.php</code> dibuat untuk Redirect ke halaman utama, berfungsi ketika selesai aksi membantu mencegah pengulangan aksi ketika halaman direfresh.

- <code>ListTodo.php</code>
```php
<table>
            <thead>
                <tr>
                    <th>Aktivitas</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($todos as $todo): ?>
                    <tr class="<?php echo $todo['is_completed'] ? 'completed' : ''; ?>">
                        <td><?php echo htmlspecialchars($todo['task']); ?></td>
                        <td class="actions">
                            <?php if (!$todo['is_completed']): ?>
                                <a href="?action=complete&id=<?php echo $todo['id']; ?>" class="complete">☐</a>
                            <?php endif; ?>
                        </td>
                        <td class="created-at"><?php echo htmlspecialchars($todo['created_at']); ?></td> 
                        <td class="updated-at"><?php echo htmlspecialchars($todo['updated_at']); ?></td>
                        <td class="actions">
                            <a href="?action=delete&id=<?php echo $todo['id']; ?>" class="delete">
                                <img src="images/delete.png" alt="Delete" class="delete-icon">
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
```
menambahkan Tabel [ Aktivasi, Status, Created At, Updated At, Delete ] dan di berikan class untuk Created At, Updated At, dan Delete. Menambahkan icon untuk delete.

- <code>styles.css</code>
```css
/* assets/css/style.css */
@font-face {
    font-family: myFirstFont;
    src: url(../css/Itim-Regular.ttf);
  }
* {
    font-family: myFirstFont;
} 

```
menambahkan font itim dan menggunakan <code>*</code> untuk universal select sehingga semua font sama jenisnya. di <code>body</code> ada warna selebihnya merubah tata letak supaya di tengah dan di atur sedemikian rupa menjadi tampilan yang simetris.

- <code>script.js</code>
```javascript
form.addEventListener('submit', function(event) {
    if (taskInput.value.trim() === '') {
        alert('Please enter a task before adding!');
        event.preventDefault();
    }
});
```
berfungsi ketika input kosong maka akan muncul peringatan <code>alert('Please enter a task before adding!');</code> dan teksnya harus di isi untuk bisa melakukan aksi.

```javascript
deleteLinks.forEach(function(link) {
    link.addEventListener('click', function(event) {
        const confirmation = confirm('Are you sure you want to delete this task?');
        if (!confirmation) {
            event.preventDefault();
        }
    });
});
```
berfungsi ketika ingin menghapus data, akan ada peringatan <code>const confirmation = confirm('Are you sure you want to delete this task?');</code> jika di klik konfirmasi, maka data akan terhapus.

Untuk selebihnya tidak ada perubahan pada Models, core, controllers.