
Website ini menggunakan Framework Laravel PHP dan Bootsrap Fremework CSS
Tema Website : Website penyedia Informasi Wisata 

-------------------------------------------------------------
PENJELASAN PROJEK / ALUR
-------------------------------------------------------------

FITUR :
1. Auth Login dan Register menggunakan Package Laravel UI Auth
2. CRUD Paket Wisata dan CRUD Galery foto wisata
3. Fitur search wisata

Note :
Untuk mengakses halaman login admin adalah : name-root/admin/
contoh :
"localhost:xxx/admin"


1. website ini digunakan oleh 2 user, yaitu admin dan pengunjung, yang mengelola website ini adalah admin, jika admin belum mempunyanyai akun, maka dapat mergisterkan akun terlebiih dahulu, jika berhasil register, maka dapat login dan masuk ke dalam halaman admin, sebelum berhasil login maka akan dilakukan validasi akun terlebih dahulu, untuk mengecek apakah akun sudah ada atau belum.
2. didalam dashboard admin, admin dapat melakukan tambah wisata, ubah wisata, hapus wisata, dan lihat wisata.
3. admin juga dapat menambah foto galeri, ubah foto galeri, hapus foto galeri, dan lihat foto galeri.
4. ketika admin melakukan CRUD paket wisata dan galleries, sebelum berhasil menambahkan atau mengubah, maka akan dilakukan validasi form terlebih dahulu, jadi minimalh semua form harus diisi, serta sistem itu menerapkan relasi antar tabel, yaitu tabel wisata dan galleries, idenya adalah, 1 paket wisata mempunyai banyak galeries, jadi ketika menambahkan foto galeries diwajib kan untuk menambahkan paket wisata terlebih dahulu.
