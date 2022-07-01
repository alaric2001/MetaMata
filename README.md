# MetaMata

Cara instalasi web ResepKu:

I #Clone
1. Buat folder baru dengan nama "metamata"
2. Clone repository gihub dengan link "https://github.com/alaric2001/MetaMata.git" pada folder "metamata"
4. Buka folder "resepku"
5. Setelah membuka folder "resepku", hapus semua alamat yang ada di Address bar
6. Ketik "cmd" pada Address bar
7. Setelah cmd terbuka, ketik "code ." untuk membuka Vscode

II #Import Database
1. Start Xampp (Apache dan MySql)
2. Buka phpMyAdmin
3. Buat Database baru dengan nama "metamata"
4. Import database "metamata.sql"
5. Buka Vscode klik file ".env"
    -Bila belum ada file ".env", pindahkan file ".env" yang berada pada folder "metamata" ke folder "resepku
6. Hapus isi dari APP_KEY=...
7. Ketikkan "php artisan key:generate" diterminal
8. Ubah 3344 pada DB_PORT=, DB_USERNAME=root, dan DB_PASSWORD= sesuai port pada pc masing-masing

III #Run Web
1. Buka terminal pada Vscode Lalu ketik "php aritan serve"
2. Klik link yang muncul atau Copy lalu pastekan pada web browser
3. Lakuakan register (klik link register pada pojok kanan atas tampilan web) bila ingin membuat akun baru
4. Bila ingin menggunakan akun yang sudah ada, ada melakukan login (klik link login pada pojok kanan atas tampilan web) dan masukkan email dan password berikut
    -email: al@mail.com atau user@mail.com  atau user2@mail.com 
    -Pw: 123
5. Selamat anda berhasil masuk ke web ResepKu