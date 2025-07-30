# Analisis Proyek - Moodspace

## Deskripsi Singkat
Moodspace adalah sebuah aplikasi web yang dibuat untuk membantu pengguna mencatat suasana hati mereka setiap hari. Dengan mencatat mood, pengguna bisa lebih sadar akan kondisi emosional mereka dari waktu ke waktu.

---

## Latar Belakang
Banyak orang sering mengalami perubahan suasana hati tanpa menyadari penyebabnya. Jika terus dibiarkan, hal ini bisa memengaruhi kesehatan mental secara keseluruhan. Moodspace dibuat agar pengguna bisa mencatat dan memantau mood mereka setiap hari secara sederhana dan mudah digunakan.

---

## Tujuan Pembuatan
- Membantu pengguna mengenali dan memahami pola mood mereka.
- Menyediakan tempat pribadi untuk mencatat perasaan dan catatan harian.
- Menyajikan histori suasana hati secara terstruktur dan mudah dilihat.

---

## Fitur yang Akan Dibuat
- Autentikasi pengguna (Login dan Register).
- Input mood harian beserta catatan tambahan.
- Tampilan daftar histori mood.
- Panel admin menggunakan Filament.
- Rencana tambahan: grafik perubahan mood (opsional).

---

## Struktur Data yang Digunakan
- **Array**: untuk daftar pilihan mood seperti happy, sad, angry, dll.
- **MVC**: pendekatan utama dari Laravel.
- **Relasi Database**: user memiliki banyak mood log dan jurnal.
- **Searching**: pencarian histori mood berdasarkan tanggal atau isi catatan.
- (Opsional) **Stack/Queue/Tree/Graph** jika fitur lebih kompleks ditambahkan nantinya.

---

## Tools dan Teknologi
- Laravel 12
- MariaDB / MySQL
- Filament (Admin Panel Laravel)
- Git + GitHub
- Tailwind CSS (untuk tampilan)

---

## Tabel-Tabel yang Dibuat
- `users`: data pengguna
- `mood_logs`: mood harian (relasi dengan user)
- `journals`: catatan harian (relasi dengan user, opsional)

---

## Rencana Pengembangan
1. Buat struktur project Laravel
2. Tambah migration dan seeder mood log
3. Buat Filament Resource
4. Buat fitur pencatatan journal
5. Tambahkan grafik dan fitur pencarian
6. (Opsional) Tambahkan API untuk frontend terpisah

---

## Penutup
Moodspace dirancang agar bisa jadi tempat yang nyaman untuk mencurahkan perasaan. Harapannya, pengguna bisa lebih sadar dan terbantu dalam menjaga keseimbangan emosinya lewat catatan sederhana yang dibuat setiap hari.

