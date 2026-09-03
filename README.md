<div align="center">

<img src="public/img/logo.png" alt="Logo" width="120" />

# 🗓️ Sistem Informasi Permohonan Cuti Pegawai

Sistem berbasis web untuk mengelola proses pengajuan, persetujuan, penolakan, dan riwayat cuti pegawai.

<br>

### 🌐 Live Demo

**https://sicute.onrender.com**

> Akun demo: NIP `200302095` / password `udin` (pegawai) · NIP `200302094` / password `test` (admin)

<br>

[![Live Demo](https://img.shields.io/badge/Live_Demo-sicute.onrender.com-46E3B8?logo=render&logoColor=white)](https://sicute.onrender.com)
[![Laravel](https://img.shields.io/badge/Laravel-9-FF2D20?logo=laravel\&logoColor=white)](https://laravel.com/)
[![PHP](https://img.shields.io/badge/PHP-8+-777BB4?logo=php\&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?logo=mysql\&logoColor=white)](https://www.mysql.com/)
[![Vite](https://img.shields.io/badge/Vite-Frontend-646CFF?logo=vite\&logoColor=white)](https://vitejs.dev/)

</div>

---

## 📋 Tentang Project

**Sistem Informasi Permohonan Cuti Pegawai** adalah aplikasi web yang dibuat untuk mendigitalisasi proses pengelolaan cuti pegawai.

Sistem membantu proses pengajuan cuti menjadi lebih terstruktur, mulai dari pengajuan oleh pegawai hingga proses persetujuan dan pencatatan riwayat.

---

## ✨ Fitur Utama

* 🔐 Login dan autentikasi pengguna
* 📊 Dashboard
* 👨‍💼 Manajemen data pegawai
* 🏢 Manajemen unit kerja
* 📝 Pengajuan cuti
* ✏️ Edit pengajuan
* ✅ Persetujuan cuti
* ❌ Penolakan cuti
* 🚫 Pembatalan pengajuan
* 📚 Riwayat permohonan
* 📥 Import data pegawai dari Excel
* 👥 Role-based access

---

## 🔄 Alur Pengajuan

```text
Pegawai
   │
   ▼
Pengajuan Cuti
   │
   ▼
Menunggu Review
   │
   ├── Disetujui ✅
   │
   ├── Ditolak ❌
   │
   └── Dibatalkan 🚫
           │
           ▼
        Riwayat
```

---

## 🛠️ Tech Stack

<div align="center">

<img src="https://skillicons.dev/icons?i=laravel,php,mysql,html,css,js,vite,git,github" />

</div>

<br>

| Teknologi        | Penggunaan        |
| ---------------- | ----------------- |
| Laravel 9        | Backend Framework |
| PHP 8+           | Server-side       |
| MySQL            | Database          |
| Blade            | Template Engine   |
| Vite             | Asset Bundler     |
| Laravel Sanctum  | Authentication    |
| Laravel Excel    | Import Data       |
| Yajra DataTables | Data Table        |
| SweetAlert       | Alert & Dialog    |
| Toastr           | Notification      |

---

## 🚀 Instalasi

Clone repository:

```bash
git clone https://github.com/Zee7X/Sistem-Informasi-Permohonan-Cuti-Pegawai.git
cd Sistem-Informasi-Permohonan-Cuti-Pegawai
```

Install dependency:

```bash
composer install
npm install
```

Buat file environment:

```bash
cp .env.example .env
php artisan key:generate
```

Atur database pada `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cuti_pegawai
DB_USERNAME=root
DB_PASSWORD=
```

Jalankan migration:

```bash
php artisan migrate
```

Jalankan aplikasi:

```bash
php artisan serve
```

Pada terminal lain:

```bash
npm run dev
```

Kemudian buka:

```text
http://127.0.0.1:8000
```

---

## 👨‍💻 Developer

<div align="center">

Dikembangkan dan dikelola oleh

### Zee7X

[![GitHub](https://img.shields.io/badge/GitHub-Zee7X-181717?style=for-the-badge\&logo=github\&logoColor=white)](https://github.com/Zee7X)

<br>

**Sistem Informasi Permohonan Cuti Pegawai**

Built with ❤️ using Laravel

</div>
