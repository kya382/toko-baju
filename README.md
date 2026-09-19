# Product Information System - Toko Baju

## Deskripsi Project

Product Information System adalah aplikasi sederhana berbasis PHP yang dibuat untuk membantu menampilkan informasi produk pada sebuah toko baju.

Aplikasi ini digunakan untuk menampilkan berbagai produk baju yang tersedia di toko, mulai dari nama produk, kategori, harga, jumlah stok, hingga deskripsi produk.

Project ini dibuat untuk menerapkan konsep dasar pemrograman PHP, seperti array multidimensi, function, percabangan, dan perulangan `foreach`.

Selain menampilkan informasi produk, aplikasi juga dapat menghitung total nilai stok barang yang tersedia di toko. Produk yang memiliki stok kurang dari 3 akan diberikan tanda sebagai stok kritis.

---

## Tujuan Project

Project ini dibuat untuk:

1. Memahami dasar-dasar pemrograman PHP.
2. Memahami penggunaan array multidimensi.
3. Memahami penggunaan function.
4. Menggunakan percabangan dalam PHP.
5. Menggunakan perulangan `foreach`.
6. Memisahkan data, proses, dan tampilan.
7. Menampilkan informasi produk toko baju dalam bentuk tabel.

---

## Fitur Aplikasi

Fitur yang terdapat pada sistem informasi toko baju ini yaitu:

- Menampilkan daftar produk baju.
- Menampilkan ID produk.
- Menampilkan nama produk.
- Menampilkan kategori produk.
- Menampilkan harga produk.
- Menampilkan jumlah stok.
- Menampilkan deskripsi produk.
- Menghitung total nilai stok barang.
- Menandai produk dengan stok kritis.
- Menampilkan data produk secara otomatis menggunakan `foreach`.

---

## Tampilan Program


<img width="933" height="423" alt="product-information-system" src="https://github.com/user-attachments/assets/9ed66208-264b-4f7d-887f-b989b15a7084" />

---

## Produk Toko Baju

Data yang digunakan dalam aplikasi merupakan beberapa produk yang tersedia di toko baju.

| ID | Nama Produk | Kategori | Harga | Stok |
|----|-------------|----------|-------|------|
| 1 | Baju Kaos Polos | Kaos | Rp 75.000 | 10 |
| 2 | Baju Kemeja Pria | Kemeja | Rp 150.000 | 5 |
| 3 | Baju Kemeja Wanita | Kemeja | Rp 160.000 | 2 |
| 4 | Hoodie Casual | Hoodie | Rp 200.000 | 7 |
| 5 | Sweater Rajut | Sweater | Rp 175.000 | 3 |
| 6 | Baju Polo | Polo | Rp 120.000 | 8 |
| 7 | Jaket Denim | Jaket | Rp 250.000 | 1 |
| 8 | Baju Oversize | Kaos | Rp 100.000 | 6 |
| 9 | Kemeja Flanel | Kemeja | Rp 180.000 | 4 |
| 10 | Jaket Hoodie | Jaket | Rp 220.000 | 2 |

---

## Struktur Project

```text
mini project/
│
├── Images/
│   └── product-information-system.png
│
├── functions.php
├── index.php
├── products.php
└── README
