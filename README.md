**Alur Website Reservasi Vila**
 
**1. Deskripsi Umum**

Website reservasi vila yang dirancang menyediakan layanan reservasi vila. Website ini memungkinkan pengguna untuk mencari dan memesan vila secara online dengan mudah dan praktis.
Website ini bertujuan untuk memberikan kemudahan bagi pengguna dalam melakukan reservasi vila. Pengguna dapat mencari vila yang sesuai dengan kebutuhan mereka, seperti lokasi, harga, jumlah kamar, fasilitas, dan lain sebagainya. Selain itu, website ini juga menyediakan berbagai informasi tentang vila yang tersedia, seperti deskripsi vila, foto vila, dan ulasan dari pengguna lain.
Website reservasi vila ini juga memiliki beberapa fitur tambahan yang sangat berguna bagi pengguna, seperti sistem pembayaran online, sistem notifikasi reservasi, dan fitur pemesanan ulang. Dengan adanya fitur-fitur ini, pengguna dapat melakukan reservasi vila dengan lebih mudah, aman, dan cepat.
Secara keseluruhan, website reservasi vila ini memberikan solusi yang efektif dan efisien bagi pengguna yang ingin melakukan reservasi vila dengan mudah dan praktis. Dengan website ini, pengguna dapat menikmati pengalaman menginap di vila yang menyenangkan tanpa perlu repot mencari dan memesan secara manual.

**2. Teks Editor ( VSCODE )**

Bahasa pemrograman yang digunakan adalah PHP, Java script Dan menerapkan database pada website yang kami rancang, dengan nama shop_db.

**3. Implementasi Program**

A). Halaman Login 
![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/920dcce4-b48c-4cf7-bc4a-4ccc2b1050c9)

Terdapat 3 jenis role yang dapat mengakses website, diantaranya role admin, user dan staff. Masing masing role dapat melakukan login apabila email dan password nya sudah terdaftar pada database. Kemudian setiap role akan menampilkan tampilannya masing-masing apabila telah melakukan login. 

B). Halaman Mendaftar Akun

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/aba76f2b-9170-48d9-b8f2-057c16f84930)

Apabila belum memiliki akun yang telah terdaftar pada database, maka pengguna dapat melakukan register atau pendaftaran akun terlebih dahulu. Dengan menginputkan nama, email, password dan konfirmasi password. Apabila akun telah terbuat, maka dapat melakukan login dengan akun yang telah didaftarkan sebelumnya.

C). Login Sebagai User

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/a78a7a49-547b-486c-9b00-6bb256430421)


a. Home User

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/ee21aa67-24e9-4a0d-b194-57ab001ec6aa)


b. Reservasi Vila

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/90f4feab-7ef0-4116-811f-6f11e5d445ce)


Setelah berhasil login, terdapat tampilan dimana user dapat menggunakan fitur yang ada. Beberapa fitur tersebut diantaranya:

- Galeri Vila

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/6f97d2a1-bf93-4f58-9f7f-0e4889a4a4d6)


- Melihat review pengguna

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/1333c660-f9cc-4c73-b8a1-852c843be651)


Customer dapat melihat review dari customer lain.

- Contact Us 

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/1cf2b05a-df76-4b39-8dfd-dbc19a173054)


Customer dapat mengirimkan pesan, kritik dan saran yang ditujukan kepada vila tersebut.

- Search dan Sorting

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/d656d4f5-cdaf-4729-8c59-ed5abae005e4)

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/9b379fcc-c881-4202-80b2-31db2ffbde16)


User juga dapat melakukan searching dan sorting.

- Reservasi

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/e45f1539-a7db-4ac3-8168-a2071dbf61e9)


User dapat melakukan reservasi dengan memasukan jumlah hari booking pada kolom yang disediakan
Kemudian Add to cart

- Keranjang

Pada fitur keranjang ini, terdapat deskripsi vila yang sudah di reservasi dan total harga nya.

User dapat melihat daftar reservasi pada icon keranjang dan terdapat tampilan sebagai berikut:

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/924a4d00-4f35-4fa6-8859-b4d2d358b7b7)


User dapat mengklik Process to Checkout untuk melakukan transaksi dengan mengisi form

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/5ca2ac11-657e-4212-8c45-014ee9c44ac3)


User dapat mengisi form pribadi untuk melakukan reservasi vila.

Jika sudah mengisi maka bisa mengklik Reservation Now

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/b03e4fb6-d685-45f4-9d21-66323094e7d2)


Berikut tampilan pada invoice reservation user dan status nya masih pending, nanti akan diberikan status selanjutnya oleh staff

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/a04d4d4e-e540-4393-8bb9-6aeb7f3b8e2d)


Dan sudah pasti, user dapat melakukan reservasi vila.

- Button Akun

Pada fitur ini, terdapat tampilan atau deskripsi dari akun yang dipakai untuk melakukan login. Deskripsi tersebut berupa username dan email, kemudian terdapat pilihan untuk logout.

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/58d525e6-bb7f-4bd9-b844-ef757a7b9cd0)


D). Login Sebagai Staff

Setelah berhasil login, terdapat tampilan di mana staff dapat menggunakan fitur yang ada. Beberapa fitur tersebut diantaranya:

- Dashboard
- 
Pada tampilan dashboard, terdapat rincian dari total pending, total pembayaran, total vila yang sudah di reservasi, dan total pesan dari customer.

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/644a067c-c8f1-4d2f-ab4e-1e2afdac11f3)

Tampilan Jika user sudah ada melakukan transaksi

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/c96043ef-8690-4d34-9a21-e0e5d5d70e2e)


- Detail Vila

Staff dapat menambahkan deskripsi dari vila dan mengubah maupun menghapus vila tersebut.

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/2a276889-7d2b-4d7f-8c98-b9b1e6c14524)


Detail yang berhasil ditambahkan akan terlihat seperti ini:

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/b643ebc9-05fa-4977-b745-27003daed8b1)


- Menambahkan vila

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/30d6ee1f-e9e8-4d85-862f-593080a1b802)


Setelah berhasil membuat detail vila selanjutnya staff dapat menambahkan vila sesuai dengan detail vila yang telah dibuat.

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/40d63538-18f3-41e7-b5ce-aaf75c6a5a9b)

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/9478e140-f2c3-459c-ab83-f29c1dbbe971)


- Reservation

Fitur ini digunakan untuk melihat customer atau orang yang melakukan yang reservasi. Dan staff di sini dapat melakukan perubahan status dari yang pending menjadi completed atau artinya diterima.

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/6eabc28b-757e-4e2a-a868-016ea02e92a6)


E). Login Sebagai Admin

Setelah berhasil login, terdapat tampilan di mana admin dapat menggunakan fitur yang ada. Beberapa fitur tersebut diantaranya:

- Home

Pada halaman home, admin dapat melihat dashboard secara lengkap termasuk jumlah user yang login.

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/2dc5b422-b7e2-471b-a55d-138a23ba65e3)

- Users

Pada fitur ini admin dapat melihat identitas admin yang melakukan login.
![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/a7ee1bee-bb37-49d6-bd61-c292695d1f01)


- Add User

Pada user ini admin dapat melakukan add user baru untuk customer apabila diperlukan, staff, dan admin.

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/05718304-fd35-42c0-ba69-d49d08b5b218)

User yang berhasil dibuat akan terlihat di halaman user seperti di bawah ini:

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/330ed32d-aab4-46ee-aa90-8aa7dd2ada7a)


- Message

Pada fitur ini admin dapat melihat pesan atau kritik dan saran dari user

![image](https://github.com/dheaayusafitri/ProjectAkhirWeb/assets/120159860/db5a8534-e9ca-47af-b926-f27a444b2897)

Terima kasih:)



 
 
 

