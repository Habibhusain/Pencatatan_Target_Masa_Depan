# Pencatatan Target

Proyek ini adalah aplikasi sederhana untuk mencatat target harian yang ingin dicapai oleh pengguna. Aplikasi ini dibangun menggunakan PHP dan berfungsi untuk memasukkan, menyimpan, mengedit, serta menampilkan target-target yang telah ditetapkan oleh pengguna.

## Fitur

- **Menambah Target**: Pengguna dapat menambahkan target harian baru melalui halaman utama atau halaman khusus penambahan target.
- **Melihat Daftar Target**: Semua target yang sudah ditambahkan dapat dilihat di halaman utama.
- **Mengedit Target**: Pengguna dapat mengedit target yang telah ditambahkan melalui halaman khusus pengeditan.
- **Menghapus Target**: Pengguna dapat menghapus target yang sudah tidak relevan.

## Instalasi

1. **Clone repository** ini ke dalam folder `htdocs` atau `www` di server lokal kamu.

    ```bash
    git clone http://localhost/belajar-php/project/day-2/
    ```

2. Pastikan server lokal (seperti XAMPP atau WAMP) sudah berjalan dan folder proyek dapat diakses melalui browser.

3. Buka proyek dengan URL:

    ```
    http://localhost/belajar-php/project/day-2/target.php
    ```

## Cara Penggunaan

### 1. Menambahkan Target

#### Melalui Halaman Utama:

- Masukkan target baru di kolom input yang tersedia pada halaman utama.
- Klik tombol **"Tambah Target"** untuk menyimpan target tersebut.

#### Melalui Halaman Tambah Target:

- Buka URL berikut untuk mengakses halaman khusus penambahan target:

    ```
    http://localhost/belajar-php/project/day-2/tambah_target.php
    ```

- Masukkan target pada form yang tersedia.
- Klik tombol **"Simpan Target"** untuk menambahkan target ke dalam daftar.

### 2. Mengedit Target

- Untuk mengedit target yang sudah ditambahkan, buka URL berikut dengan menambahkan parameter ID target yang ingin diubah:

    ```
    http://localhost/belajar-php/project/day-2/edit_target.php?id={id}
    ```

- Ubah nilai target di form yang tersedia, lalu klik **"Simpan Perubahan"**.

Contoh:

    ```
    http://localhost/belajar-php/project/day-2/edit_target.php?id=3
    ```

- Target dengan ID 3 akan terbuka, dan kamu dapat melakukan perubahan.

### 3. Melihat Daftar Target

- Semua target yang telah ditambahkan akan muncul di halaman utama (`target.php`).
- Setiap target memiliki opsi untuk dihapus jika sudah tidak diperlukan lagi.

### 4. Menghapus Target

- Klik tombol **"Hapus"** di samping target yang ingin dihapus pada halaman utama.

## Struktur Proyek

- `target.php`: File utama untuk menampilkan dan mengelola pencatatan target.
- `tambah_target.php`: File khusus untuk menambah target melalui halaman terpisah.
- `edit_target.php`: File untuk mengedit target yang sudah ada melalui halaman terpisah.
- `style.css`: (Jika ada) File CSS untuk styling halaman aplikasi.

## Teknologi yang Digunakan

- **PHP**: Bahasa backend utama untuk pengelolaan logika aplikasi.
- **HTML/CSS**: Untuk struktur dan tampilan aplikasi di browser.
- **SQLITE** (Opsional): Jika ingin menambahkan penyimpanan target secara permanen, kamu bisa mengintegrasikan database SQLITE untuk menyimpan data.

