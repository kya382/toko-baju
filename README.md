# Product Information System

## Deskripsi Project

Product Information System adalah aplikasi sederhana berbasis PHP yang digunakan untuk menampilkan dan mengelola informasi produk pakaian.

Aplikasi ini dibuat untuk menerapkan konsep dasar pemrograman PHP, seperti array multidimensi, function, percabangan, perulangan `foreach`, serta pemisahan antara data, proses, dan tampilan.

Data produk yang ditampilkan terdiri dari ID, nama produk, kategori, harga, stok, dan deskripsi.

Selain menampilkan data produk, aplikasi juga menghitung total nilai stok dari seluruh produk. Produk yang memiliki stok kurang dari 3 akan diberikan tanda khusus pada tabel sebagai stok kritis.

---

## Tujuan Project

Project ini dibuat untuk:

1. Memahami penggunaan PHP dasar.
2. Memahami penggunaan array multidimensi.
3. Membuat dan menggunakan function pada PHP.
4. Menggunakan percabangan untuk menentukan kondisi stok.
5. Menggunakan perulangan `foreach` untuk menampilkan data.
6. Memisahkan data, proses, dan tampilan ke dalam beberapa file.
7. Menampilkan data produk dalam bentuk tabel HTML.

---

## Fitur Aplikasi

Beberapa fitur yang terdapat pada aplikasi ini adalah:

- Menampilkan daftar produk pakaian.
- Menampilkan ID setiap produk.
- Menampilkan nama produk.
- Menampilkan kategori produk.
- Menampilkan harga produk.
- Menampilkan jumlah stok.
- Menampilkan deskripsi produk.
- Menghitung total nilai stok.
- Memberikan tanda pada produk dengan stok kritis.
- Menampilkan data secara otomatis menggunakan perulangan PHP.

---

## Tampilan Program

![Product Information System](images/product-information-system.png)

---

## Data Produk

Aplikasi menggunakan beberapa data produk pakaian, yaitu:

| ID | Nama | Kategori | Harga | Stok |
|----|------|----------|-------|------|
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
product-information-system/
│
├── index.php
├── products.php
├── functions.php
├── README.md
│
└── images/
    └── product-information-system.png
