<?php
/* 
 * DATASET FOR REPLACEMENT 
 * 
 * RULES: 
 * karakter yang di cari harus 2 atau lebih, 
 * hindari karakter 1 kata,
 * karakter harus unique dalam state pencarian agar tepat sasaran
 * 
 * FLOW:
 * $x[] = [ search, replace ];
 * 
 * */


/* BASIC */
$x[] = [
  'date_default_timezone_set("Asia/Kuala_Lumpur");',
  'date_default_timezone_set("Asia/Jakarta");'
];


/* ALERTS */
$x[] = [
  "alert(\'Sila pastikan nama form diwujudkan.!\');",
  "alert(\'Silakan pastikan nama form dibuat/tersedia.!\');"
];
$x[] = [
  "alert(\'Sila pilih rekod yang hendak di\' + v + \'kan.\');",
  "alert(\'Silakan pilih data/rekaman yang ingin di\' + v + \'kan.\');"
];
$x[] = [
  "confirm(count + \' rekod hendak di \' + v + \'?\'))",
  "confirm(count + \' data yang ingin di \' + v + \'?\'))"
];
$x[] = [
  "alert(\'Sila pilih satu rekod sahaja untuk kemaskini status\');",
  "alert(\'Silakan pilih satu data saja untuk memperbarui status\');"
];
$x[] = [
  "alert(\'Sila pilih satu rekod sahaja untuk reset kala laluan\');",
  "alert(\'Silakan pilih satu data saja untuk reset kata sandi\');"
];
$x[] = [
  "confirm(\' Rekod ini akan diresetkan kata laluan?\')",
  "confirm(\' Data ini akan direset kata sandinya?\')"
];
$x[] = [
  'alert("Katalaluan anggota ini telah direset kepada \"koperasi123\"\nSila maklumkan kepada anggota ini supaya menukar kata laluan.");',
  'alert("Kata sandi anggota ini telah direset menjadi \"koperasi123\"\nSilakan informasikan kepada anggota tersebut agar mengganti kata sandinya.");'
];
$x[] = [
  "' Kata Laluan Anggota Telah Di Set Semula - '",
  "' Kata Sandi Anggota Telah Direset - '",
];



/* DATATABLES */
$x[] = [
  "Carian Melalui",
  "Cari Berdasarkan",
];
$x[] = [
  "&nbsp;&nbsp;Paparan",
  "&nbsp;&nbsp;Tampil",
];
$x[] = [
  "&nbsp;&nbsp;setiap mukasurat.",
  "&nbsp;&nbsp;setiap halaman.",
];
$x[] = [
  "Jumlah Rekod :",
  "Jumlah Data :",
];
$x[] = [
  "Rekod Dari :",
  "Data Dari :",
];


/* LABELS */
$x[] = [
  "Nombor Anggota",
  "Nomor Anggota",
];
$x[] = [
  "Cawangan/Zon",
  "Cabang/Zona",
];
$x[] = [
  "Tarikh Memohon",
  "Tanggal Pengajuan",
];
$x[] = [
  "Tarikh Keanggotaan",
  "Tanggal Keanggotaan",
];
$x[] = [
  'Kad Pengenalan',
  'Kartu Identitas'
];
$x[] = [
  'No KP Baru',
  'No KTP Baru'
];
$x[] = [
  'No KP Lama',
  'No KTP Lama'
];
$x[] = [
  'Baki Hutang',
  'Sisa Utang'
];
$x[] = [
  'Mahkamah Tinggi',
  'Pengadilan Tertinggi'
];
$x[] = [
  'Mahkamah Tribunal',
  'Pengadilan Tribunal'
];
$x[] = [
  'Mahkamah Sesyen',
  'Pengadilan Negeri'
];
$x[] = [
  'Akuan Hapus Kira',
  'Pernyataan Penghapusan'
];



/* LABELS STATE */
$x[] = [
  '* Nama Penuh',
  '* Nama Lengkap'
];
$x[] = [
  '* Kata Laluan',
  '* Kata Sandi'
];
$x[] = [
  '* Kenal Pasti Kata Laluan',
  '* Identifikasi kata sandi'
];
$x[] = [
  '* Kenal Pasti Kata Laluan',
  '* Identifikasi kata sandi'
];
$x[] = [
  '* Emel<br>(Pastikan Sah)',
  '* Email<br><b>(Pastikan valid)</b>'
];
$x[] = [
  '* Kad Pengenalan<br>Tiada (-)',
  '* Kartu Identitas<br><b>Tidak Ada (-)</b>'
];
$x[] = [
  'Tarikh Lahir',
  'Tanggal Lahir'
];
$x[] = [
  'Jawatan Pekerjaan',
  'Jabatan Pekerjaan'
];
$x[] = [
  '* Cawangan / Zon',
  '* Cabang / Zona'
];
$x[] = [
  'Alamat Kediaman',
  'Alamat Rumah'
];
$x[] = [
  'Alamat Cawangan',
  'Alamat Cabang'
];
$x[] = [
  'Poskod Kediaman',
  'Kode Pos Rumah'
];
$x[] = [
  'Kod PTJ',
  'Kode PTJ'
];
$x[] = [
  'Bandar Kediaman',
  'Kota Rumah'
];
$x[] = [
  '* Nombor Telefon<br>Cth: 6011XXXXXXXX',
  '* Nomor Telepon<br><b>Cth: 6011XXXXXXXX</b>'
];
$x[] = [
  'Negeri Kediaman',
  'Provinsi Rumah'
];
$x[] = [
  'Nombor Pekerja<br>(Sekiranya Ada)',
  'Nomor Karyawan<br><b>(Isi Jika Ada)</b>'
];
$x[] = [
  'Nombor Pekerja',
  'Nomor Karyawan'
];
$x[] = [
  'Bangsa',
  'Suku Bangsa'
];
$x[] = [
  'Status Perkahwinan',
  'Status Pernikahan'
];
$x[] = [
  "array('Bujang', 'Berkahwin', 'Janda/Duda')",
  "array('Belum menikah', 'Menikah', 'Janda/Duda')"
];
$x[] = [
  'Jatina',
  'Jenis Kelamin'
];
$x[] = [
  "array('Lelaki', 'Perempuan')",
  "array('Laki-laki', 'Perempuan')"
];
$x[] = [
  "Nombor Anggota Pencadang",
  "Nomor Anggota Pengusul"
];
$x[] = [
  "Nombor Anggota Pencadang",
  "Nomor Anggota Pengusul"
];
$x[] = [
  "Tarikh Menjadi Anggota",
  "Tanggal Menjadi Anggota"
];
$x[] = [
  "* Telefon Bimbit<br>Cth: 6011XXXXXXXX",
  "* Nomor Telepon<br><b>Cth: 6011XXXXXXXX</b>"
];
$x[] = [
  "* Telefon Bimbit<br>Cth: 6011XXXXXXXX",
  "* Nomor Telepon<br><b>Cth: 6011XXXXXXXX</b>"
];
$x[] = [
  "Status Hutang Lapuk",
  "Status Utang Macet"
];
$x[] = [
  "Status Senarai Hitam",
  "Status Daftar Hitam"
];
$x[] = [
  "BlackList Dividen",
  "Daftar Hitam Dividen"
];
$x[] = [
  "Jawatan Dalam Koperasi",
  "Jabatan Dalam Koperasi"
];





/* ETC */
$x[] = [
  '<b class="textFont">- Tiada Rekod Untuk',
  '<b class="textFont">- Tidak Ada Data Untuk'
];
$x[] = [
  '<b class="textFont">- Carian rekod "\' . $q . \'" tidak jumpa  -</b>',
  '<b class="textFont">- Pencarian data "\' . $q . \'" tidak ditemukan  -</b>'
];
$x[] = [
  '<strong>Sila pilih Jabatan / Cawangan.</strong>',
  '<strong>Silakan pilih Departemen / Cabang.</strong>'
];
$x[] = [
  '<strong>* Kata Laluan mesti sekurang-kurangnya ENAM [6] aksara.</strong>',
  '<strong>* Kata sandi harus minimal enam [6] karakter.</strong>'
];
$x[] = [
  '<strong>* Kata Laluan mesti sama dengan kenal pasti Kata Laluan.</strong>',
  '<strong>* Kata sandi harus sama dengan konfirmasi kata sandi.</strong>'
];
$x[] = [
  '<strong>* ID Pengguna sudah wujud. Sila pilih ID pengguna yang lain</strong>',
  '<strong>* ID Pengguna sudah ada. Silakan pilih ID pengguna yang lain</strong>'
];
$x[] = [
  '<strong>* Nombor akaun tersebut telah digunakan.</strong>',
  '<strong>* Nomor akun tersebut sudah digunakan.</strong>'
];
$x[] = [
  '<strong>* IC telah wujud.</strong>',
  '<strong>* Nomor KTP sudah terdaftar.</strong>'
];
$x[] = [
  'BORANG MENJADI ANGGOTA (* Mesti diisi untuk permohonan.)',
  'FORMULIR MENJADI ANGGOTA ( Harus diisi untuk permohonan.)*'
];
$x[] = [
  'MAKLUMAT PENDAFTARAN ID',
  'INFORMASI PENDAFTARAN ID'
];
$x[] = [
  'BUTIR-BUTIR PERIBADI',
  'DETAIL PRIBADI'
];
$x[] = [
  'PENCADANG : (NOMBOR ANGGOTA YANG TELAH BERDAFTAR BERSAMA KOPERASI)',
  'PENGUSUL : (NOMOR ANGGOTA YANG SUDAH TERDAFTAR DI KOPERASI)'
];
$x[] = [
  'PENCADANG : (NOMBOR ANGGOTA YANG TELAH BERDAFTAR BERSAMA KOPERASI)',
  'PENGUSUL : (NOMOR ANGGOTA YANG SUDAH TERDAFTAR DI KOPERASI)'
];
$x[] = [
  'MAKLUMAT BANK',
  'INFORMASI BANK'
];



/* STRICT ( CAUSE THIS IS 1 WORDS ) */
// $x[] = [
//   'Diluluskan',
//   'Disetujui'
// ];