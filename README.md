# MVC PHP Native - Data Mahasiswa 
  
Aplikasi CRUD sederhana untuk mempelajari pola Model-View-Controller pada PHP Native. 
  
## Kebutuhan - PHP 8.0 atau lebih baru - MySQL/MariaDB - Web server lokal seperti XAMPP atau Laragon - Git 
  
## Instalasi 
1. Clone atau salin project ke folder web server. 
2. Import `database/kampus.sql`. 
3. Sesuaikan koneksi pada `config/database.php`. 
4. Buka http://localhost/mvc-native/mvc-native/public/index.php?page=mahasiswa 
  
## Struktur MVC - `app/models/` : akses dan operasi data. - `app/controllers/` : alur request dan pemanggilan Model/View. - `app/views/` : tampilan HTML. - `config/` : konfigurasi koneksi database. - `database/` : skema dan data awal SQL. - `public/` : entry point aplikasi. 
  
## Fitur - Menampilkan data mahasiswa - Menambah data mahasiswa - Mengubah data mahasiswa - Menghapus data mahasiswa 
  
## Histori Git 
Gunakan `git log --oneline --graph --decorate` untuk melihat tahapan pengembangan. 