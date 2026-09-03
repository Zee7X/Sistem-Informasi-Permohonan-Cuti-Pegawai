<div align="center">

<img
 src="public/img/logo.png"
 alt="PNC Logo"
 width="130"
/>

# Sistem Informasi Permohonan Cuti Pegawai

### Employee Leave Management System

**Web-based leave management system built with Laravel**

Sistem informasi untuk mengelola proses pengajuan, persetujuan,
penolakan, pembatalan, dan riwayat cuti pegawai secara terpusat.

  <br />

[![Laravel](https://img.shields.io/badge/Laravel-9.x-FF2D20?logo=laravel\&logoColor=white)](https://laravel.com/)
[![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?logo=php\&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?logo=mysql\&logoColor=white)](https://www.mysql.com/)
[![Vite](https://img.shields.io/badge/Vite-Frontend-646CFF?logo=vite\&logoColor=white)](https://vitejs.dev/)
[![GitHub](https://img.shields.io/badge/GitHub-Zee7X-181717?logo=github\&logoColor=white)](https://github.com/Zee7X)

</div>

---

## 📋 About The Project

**Sistem Informasi Permohonan Cuti Pegawai** adalah aplikasi berbasis web
yang digunakan untuk membantu pengelolaan proses cuti pegawai secara digital.

Sistem dirancang agar proses pengajuan cuti tidak lagi dilakukan secara manual,
mulai dari proses pengajuan oleh pegawai hingga persetujuan atau penolakan oleh
pihak yang memiliki wewenang.

Informasi pengajuan tersimpan secara terpusat sehingga status dan riwayat cuti
dapat dipantau dengan lebih mudah.

> Simplifying employee leave management through a centralized digital workflow.

---

## ✨ Features

### 🔐 Authentication

Sistem menyediakan autentikasi pengguna untuk memastikan hanya pengguna
yang memiliki akses yang dapat menggunakan aplikasi.

Fitur autentikasi meliputi:

* Login
* Logout
* Authenticated dashboard
* User session
* Role-based access

---

### 📊 Dashboard

Dashboard digunakan sebagai pusat informasi utama sistem.

Pengguna dapat melihat informasi terkait:

* Data pegawai
* Permohonan cuti
* Status permohonan
* Riwayat cuti
* Informasi akun

---

### 👨‍💼 Employee Management

Administrator dapat melakukan pengelolaan data pegawai.

Fitur yang tersedia:

* Melihat daftar pegawai
* Menambahkan pegawai
* Mengubah data pegawai
* Menghapus pegawai
* Mengelola profile pegawai
* Import data pegawai

---

### 📥 Excel Import

Sistem mendukung proses import data pegawai menggunakan file Excel.

Fitur ini menggunakan:

```text
Maatwebsite Laravel Excel
```

Sehingga data pegawai dalam jumlah banyak dapat dimasukkan tanpa harus
menambahkannya satu per satu.

---

### 🏢 Unit Management

Administrator dapat mengelola unit kerja pegawai.

Fitur unit meliputi:

* Melihat data unit
* Menambahkan unit
* Mengubah unit
* Menghapus unit

---

## 📝 Leave Request

Pegawai dapat membuat permohonan cuti melalui sistem.

Alur dasar pengajuan:

```text
Pegawai
   │
   ▼
Mengajukan Cuti
   │
   ▼
Permohonan Masuk
   │
   ├───────────────┐
   ▼               ▼
Disetujui        Ditolak
   │
   ▼
Riwayat
```

Pengajuan yang telah dibuat juga dapat mengalami beberapa proses sesuai
hak akses pengguna.

---

## ✅ Leave Approval

Sistem menyediakan workflow untuk memproses permohonan cuti.

Status utama meliputi:

```text
Pending
   │
   ├──► Approved
   │
   ├──► Rejected
   │
   └──► Cancelled
```

Fitur pengelolaan permohonan:

* Membuat permohonan
* Mengubah permohonan
* Menyetujui permohonan
* Menolak permohonan
* Membatalkan permohonan

---

## 📚 Leave History

Sistem memiliki halaman riwayat untuk membantu pengguna melihat status
permohonan yang pernah diproses.

Kategori riwayat yang tersedia:

* Riwayat Permohonan
* Permohonan Disetujui
* Permohonan Ditolak
* Permohonan Dibatalkan

Dengan demikian seluruh proses cuti dapat ditelusuri kembali melalui sistem.

---

## 👥 Role Based Access

Aplikasi menggunakan middleware untuk mengatur hak akses berdasarkan role.

Beberapa mekanisme akses yang digunakan:

```text
Authentication
      │
      ▼
Role Middleware
      │
      ├── Pegawai
      │
      ├── Admin
      │
      └── Authorized Management
```

Middleware yang digunakan dalam project antara lain:

```text
CheckAdmin
CheckRole
CheckWadirDanKU
UserActivity
```

Dengan pendekatan ini setiap pengguna hanya dapat mengakses fitur yang
sesuai dengan kewenangannya.

---

## 👤 User Profile

Setiap pengguna memiliki halaman profile yang dapat digunakan untuk
melihat dan memperbarui informasi akun.

Fitur:

* View Profile
* Edit Profile

---

## 🛠️ Tech Stack

<div align="center">

  <img src="https://skillicons.dev/icons?i=laravel,php,mysql,html,css,js,vite,git,github,vscode" />

</div>

<br />

| Technology       | Usage                   |
| ---------------- | ----------------------- |
| Laravel 9        | Backend framework       |
| PHP 8            | Server-side language    |
| MySQL            | Relational database     |
| Blade            | Server-side templating  |
| JavaScript       | Frontend interaction    |
| Vite             | Asset bundling          |
| Laravel Sanctum  | Authentication          |
| Laravel Excel    | Excel data import       |
| Yajra DataTables | Interactive data tables |
| SweetAlert       | Interactive alerts      |
| Toastr           | Notification messages   |

---

## 📦 Main Packages

### Backend

```text
laravel/framework
laravel/sanctum
maatwebsite/excel
realrashid/sweet-alert
yajra/laravel-datatables
yajra/laravel-datatables-oracle
yoeunes/toastr
guzzlehttp/guzzle
```

### Frontend

```text
Vite
Axios
Lodash
PostCSS
Toastr
```

---

## 🏗️ Project Structure

```text
Sistem-Informasi-Permohonan-Cuti-Pegawai/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AuthController.php
│   │   │   ├── DashboardController.php
│   │   │   ├── ImportController.php
│   │   │   ├── KaryawanController.php
│   │   │   ├── PermohonanCutiController.php
│   │   │   ├── RiwayatPermohonanController.php
│   │   │   └── UnitController.php
│   │   │
│   │   └── Middleware/
│   │       ├── CheckAdmin.php
│   │       ├── CheckRole.php
│   │       ├── CheckWadirDanKU.php
│   │       └── UserActivity.php
│   │
│   ├── Imports/
│   │
│   └── Models/
│       ├── HakCuti.php
│       ├── PermohonanModel.php
│       ├── Role.php
│       ├── Unit.php
│       └── User.php
│
├── database/
│   ├── migrations/
│   └── seeders/
│
├── public/
│   ├── css/
│   ├── img/
│   ├── js/
│   └── vendor/
│
├── resources/
│   └── views/
│
├── routes/
│   ├── api.php
│   └── web.php
│
├── .env.example
├── composer.json
├── package.json
└── vite.config.js
```

---

## 🔄 System Workflow

```text
                    ┌───────────────┐
                    │     Login     │
                    └───────┬───────┘
                            │
                            ▼
                    ┌───────────────┐
                    │   Dashboard   │
                    └───────┬───────┘
                            │
                            ▼
                    ┌───────────────┐
                    │ Pengajuan Cuti│
                    └───────┬───────┘
                            │
                            ▼
                    ┌───────────────┐
                    │    Review     │
                    └───────┬───────┘
                            │
                ┌───────────┴───────────┐
                │                       │
                ▼                       ▼
        ┌──────────────┐        ┌──────────────┐
        │   Disetujui  │        │    Ditolak   │
        └──────┬───────┘        └──────┬───────┘
               │                       │
               └──────────┬────────────┘
                          ▼
                  ┌───────────────┐
                  │    Riwayat    │
                  └───────────────┘
```

---

## 🚀 Getting Started

### Requirements

Pastikan perangkat sudah memiliki:

```text
PHP >= 8.0.2
Composer
MySQL
Node.js
NPM
```

---

### Clone Repository

```bash
git clone https://github.com/Zee7X/Sistem-Informasi-Permohonan-Cuti-Pegawai.git
```

Masuk ke project:

```bash
cd Sistem-Informasi-Permohonan-Cuti-Pegawai
```

---

### Install PHP Dependencies

```bash
composer install
```

---

### Install Frontend Dependencies

```bash
npm install
```

---

### Environment Setup

Salin file `.env.example`:

```bash
cp .env.example .env
```

Untuk Windows:

```bash
copy .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

---

## 🗄️ Database Configuration

Atur koneksi database pada file `.env`.

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cuti_pegawai
DB_USERNAME=root
DB_PASSWORD=
```

Kemudian jalankan migration:

```bash
php artisan migrate
```

Jika project memiliki seeder yang dibutuhkan:

```bash
php artisan db:seed
```

atau:

```bash
php artisan migrate --seed
```

---

## ▶️ Running The Application

Jalankan Laravel development server:

```bash
php artisan serve
```

Kemudian jalankan Vite:

```bash
npm run dev
```

Default Laravel development server dapat diakses melalui:

```text
http://127.0.0.1:8000
```

---

## 🗃️ Database Models

Project menggunakan beberapa model utama:

```text
User
 │
 ├── Role
 │
 ├── Unit
 │
 ├── Hak Cuti
 │
 └── Permohonan Cuti
```

Model utama:

| Model           | Description             |
| --------------- | ----------------------- |
| User            | Data pengguna / pegawai |
| Role            | Role dan hak akses      |
| Unit            | Unit kerja pegawai      |
| HakCuti         | Informasi hak cuti      |
| PermohonanModel | Data pengajuan cuti     |

---

## 🔒 Security & Access

Sistem menggunakan beberapa mekanisme keamanan Laravel:

* Authentication
* Middleware
* CSRF Protection
* Session Management
* Role-based Authorization
* Laravel Sanctum

Route tertentu hanya dapat diakses setelah pengguna berhasil melakukan
autentikasi dan memenuhi role yang dibutuhkan.

---

## 🎯 Project Purpose

Project ini dibuat untuk mendigitalisasi proses **permohonan cuti pegawai**
sehingga pengelolaan cuti menjadi lebih:

* Terstruktur
* Cepat
* Transparan
* Mudah dipantau
* Mudah dikelola
* Memiliki riwayat yang terdokumentasi

---

## 📌 Project Status

```text
Application : Employee Leave Management System
Platform    : Web Application
Framework   : Laravel 9
Language    : PHP
Database    : MySQL
Auth        : Laravel Sanctum
Frontend    : Blade / JavaScript
Build Tool  : Vite
```

---

## 👨‍💻 Developer

<div align="center">

Developed and maintained by

### Zee7X

[![GitHub](https://img.shields.io/badge/GitHub-Zee7X-181717?style=for-the-badge\&logo=github\&logoColor=white)](https://github.com/Zee7X)

</div>

---

<div align="center">

<img src="public/img/logo.png" width="70" />

### Sistem Informasi Permohonan Cuti Pegawai

**Making employee leave management simpler and more organized.**

Built with ❤️ using Laravel

</div>
