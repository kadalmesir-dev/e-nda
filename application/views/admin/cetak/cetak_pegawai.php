<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>NON DISCLOSURE AGREEMENT KARYAWAN</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            font-size: 12pt;
            line-height: 1.5;
            margin: 0;
            padding: 0;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .header-table {
            margin-bottom: 10mm;
            text-align: center;
        }
        
        .doc-number {
            font-weight: bold;
        }
        
        .title {
            font-weight: bold;
            font-size: 14pt;
            text-decoration: underline;
            margin: 3mm 0;
        }
        
        .subtitle {
            font-weight: bold;
            margin: 3mm 0;
        }
        
        .content-table {
            margin-bottom: 5mm;
        }
        
        .signature-table {
            margin-top: 20mm;
        }
        
        .signature-table td {
            text-align: center;
            vertical-align: bottom;
            padding-top: 15mm;
            width: 50%;
        }
        
        .underline {
            border-bottom: 1px solid #000;
            width: 70mm;
            display: inline-block;
            margin-bottom: 2mm;
        }
        
        ol {
            margin: 2mm 0;
            padding-left: 5mm;
        }
        
        ol ol {
            padding-left: 5mm;
        }
        
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>

<!-- Halaman 1 -->
<table class="header-table">
    <tr>
        <td class="doc-number">FM-SMKI-14-001</td>
    </tr>
    <tr>
        <td class="title">NON DISCLOSURE AGREEMENT KARYAWAN</td>
    </tr>
    <tr>
        <td class="subtitle">PERJANJIAN KERAHASIAAN<br>ANTARA<br>PT. DAN LIRIS DENGAN KARYAWAN</td>
    </tr>
    <tr>
        <td>Nomor: <?= $pegawai['nomor']; ?></td>
    </tr>
</table>

<table class="content-table">
    <tr>
        <td>
            <p>Pada hari ini <?= to_day_indonesia($pegawai['signature_date']) ?> tanggal <?= to_date_indonesia($pegawai['signature_date']) ?> bertempat di Kabupaten Sukoharjo, kami yang bertanda tangan di bawah ini :</p>
            
            <p>1. Nama    : _____<br>
               Jabatan    : _____<br>
               Alamat Kantor   : _____</p>
               
            <p>Dalam hal ini bertindak untuk dan atas nama PT. DAN LIRIS, untuk selanjutnya disebut sebagai <strong>PIHAK PERTAMA</strong>.</p>
            
            <p>2. Nama    : <?= $pegawai['employee_name'] ?><br>
               NIK    : <?= $pegawai['employee_nik'] ?><br>
               Jabatan    : <?= $pegawai['employee_grade'] ?><br>
               Bagian    : <?= $pegawai['employee_unit'] ?><br>
               Alamat    : _____</p>
               
            <p>Dalam hal ini bertindak untuk dan atas nama diri sendiri untuk selanjutnya disebut sebagai <strong>PIHAK KEDUA</strong>.</p>
            
            <p><strong>PIHAK PERTAMA dan PIHAK KEDUA secara bersama-sama selanjutnya disebut sebagai PARA PIHAK</strong> dan masing-masing disebut sebagai PIHAK.</p>
            
            <p><strong>PARA PIHAK dengan ini terlebih dahulu menerangkan hal-hal sebagai berikut :</strong></p>
            <ol>
                <li><strong>PIHAK PERTAMA dan PIHAK KEDUA</strong> sebelumnya telah saling mengikatkan diri dalam suatu hubungan kerja berdasarkan Perjanjian Kerja Waktu Tidak Tertentu di mana <strong>PIHAK PERTAMA</strong> telah menerima <strong>PIHAK KEDUA</strong> sebagai karyawan perusahaan <strong>PIHAK PERTAMA</strong> dengan status Karyawan Kerja Waktu Tidak Tertentu.</li>
                <li>Pekerjaan-pekerjaan <strong>PIHAK KEDUA</strong> yang terikat dalam Perjanjian Kerja Waktu Tidak Tertentu tersebut tidak terlepas dari informasi penting milik <strong>PIHAK PERTAMA</strong> yang tidak boleh diketahui oleh pihak-pihak di luar kepentingan <strong>PIHAK PERTAMA</strong>.</li>
                <li><strong>PIHAK PERTAMA</strong> bermaksud membuat kesepakatan dengan <strong>PIHAK KEDUA</strong> yang tertuang dalam Perjanjian Kerahasiaan untuk menjaga Informasi Rahasia tersebut.</li>
                <li><strong>PIHAK KEDUA</strong> setuju mengikatkan diri dengan <strong>PIHAK PERTAMA</strong> dalam suatu Perjanjian Kerahasiaan.</li>
            </ol>
        </td>
    </tr>
</table>

<!-- Page break -->
<table class="page-break">
    <tr>
        <td></td>
    </tr>
</table>

<!-- Header halaman 2 -->
<table class="header-table">
    <tr>
        <td class="doc-number">FM-SMKI-14-001</td>
    </tr>
</table>

<table class="content-table">
    <tr>
        <td>
            <p>Berdasarkan uraian tersebut di atas, <strong>PARA PIHAK</strong> dengan ini sepakat untuk mengadakan Perjanjian Kerahasiaan (Non Disclosure Agreement) dengan ketentuan sebagai berikut:</p>
            
            <p><strong>PASAL 1<br>INFORMASI RAHASIA</strong></p>
            <ol>
                <li>Informasi Rahasia adalah informasi yang diterima oleh <strong>PIHAK KEDUA</strong> dalam hubungan kerjanya dengan <strong>PIHAK PERTAMA</strong> yang karenanya sifatnya tidak dapat diungkapkan kepada pihak lain di luar Perjanjian ini tanpa izin dari <strong>PIHAK PERTAMA</strong>, apabila diungkapkan dapat menimbulkan kerugian bagi Perusahaan baik materil maupun imateril.</li>
                <li>Informasi Rahasia sebagaimana dimaksud mencakup namun tidak terbatas pada informasi bidang teknologi dan/atau bisnis, Hak Kekayaan Intelektual, informasi yang berkaitan dengan inovasi dan penemuan baru, desain, produk, perencanaan, perhitungan, konsep, sistem, program komputer, rencana marketing dan bisnis, pembiayaan, informasi keuangan, penentuan harga, dokumen perusahaan, strategi pemasaran, daftar rekanan dan sebagainya.</li>
                <li>Informasi Rahasia dapat berbentuk namun tidak terbatas pada dokumentasi, diagram alur (flow chart), kode program (source code), pengetahuan produk (product knowledge), kumpulan data (database), tulisan dan/atau lisan, gambar, laporan, catatan, rekaman dan sebagainya.</li>
                <li><strong>PIHAK KEDUA</strong> memahami dan menyetujui bahwa Informasi Rahasia tersebut merupakan milik <strong>PIHAK PERTAMA</strong>, dan dalam pelaksanaan hubungan kerja telah berakhir, <strong>PIHAK KEDUA</strong> harus berhenti menggunakan informasi rahasia dan/atau menyerahkannya kepada <strong>PIHAK PERTAMA</strong>. Apabila diperlukan <strong>PIHAK PERTAMA</strong> dapat meminta <strong>PIHAK KEDUA</strong> untuk memusnahkan informasi rahasia tersebut, termasuk salinannya yang dibuat dalam suatu berita acara pemusnahan informasi.</li>
            </ol>
            
            <p><strong>PASAL 2<br>LARANGAN PENGUNGKAPAN INFORMASI RAHASIA</strong></p>
            <ol>
                <li><strong>PIHAK KEDUA</strong> mengerti dan bersedia mengikatkan diri secara hukum bahwa selama berstatus dan/atau setelah tidak berstatus sebagai Karyawan, <strong>PIHAK KEDUA</strong> tidak akan, tanpa persetujuan tertulis terlebih dahulu dari <strong>PIHAK PERTAMA</strong>, baik secara langsung maupun tidak langsung, lisan atau tertulis untuk :
                    <ol type="a">
                        <li>Tidak menyebarluaskan, mentransfer, mengakses komputer atau sistim elektronik milik Karyawan lain dan menggunakan Informasi Rahasia yang dimaksud untuk menguntungkan diri sendiri, pihak lain, perusahaan lain, maupun entitas lain di luar kepentingan <strong>PIHAK PERTAMA</strong>;</li>
                        <li>Tidak mengumpulkan dan menyebarluaskan data pribadi dari Pejabat maupun Karyawan <strong>PIHAK PERTAMA</strong> kecuali berkaitan dengan pekerjaan atas izin <strong>PIHAK PERTAMA</strong>;</li>
                        <li>Tidak menggunakan Informasi Rahasia untuk tujuan apapun dan dengan cara apapun yang dapat merugikan <strong>PIHAK PERTAMA</strong> dan/atau menguntungkan <strong>PIHAK KEDUA</strong> secara pribadi seperti menduplikat, melakukan pembajakan, mengirim virus, melakukan penghapusan data baik dalam bentuk soft maupun hard file secara sebagian maupun keseluruhan, melakukan perusakan, serta mengambil gambar dan menyebarluaskannya.</li>
                    </ol>
                </li>
                <li>Apabila <strong>PIHAK KEDUA</strong> terbukti melakukan pelanggaran, maka <strong>PIHAK PERTAMA</strong> dapat memberikan sanksi kepada <strong>PIHAK KEDUA</strong> berupa Surat Peringatan sampai dengan Pemutusan Hubungan Kerja dengan tidak mengurangi hak <strong>PIHAK PERTAMA</strong> untuk menempuh jalur hukum. Apabila <strong>PIHAK PERTAMA</strong> menemukan adanya kerugian yang disebabkan oleh pelanggaran tersebut, maka <strong>PIHAK KEDUA</strong> bertanggung jawab atas kerugian tersebut.</li>
                <li><strong>PIHAK KEDUA</strong> sepakat bahwa pada saat hubungan kerja antara <strong>PIHAK PERTAMA</strong> dengan <strong>PIHAK KEDUA</strong> berakhir, <strong>PIHAK KEDUA</strong> akan menyerahkan kepada <strong>PIHAK PERTAMA</strong> setiap perangkat, rekaman, data, catatan, material peralatan, benda atau dokumen-dokumen lain yang mengandung Informasi Rahasia milik <strong>PIHAK PERTAMA</strong>.</li>
            </ol>
        </td>
    </tr>
</table>

<!-- Page break -->
<table class="page-break">
    <tr>
        <td></td>
    </tr>
</table>

<!-- Header halaman 3 -->
<table class="header-table">
    <tr>
        <td class="doc-number">FM-SMKI-14-001</td>
    </tr>
</table>

<table class="content-table">
    <tr>
        <td>
            <p><strong>PASAL 3<br>UMUM</strong></p>
            <p>Ketentuan lainnya yang belum diatur dalam Perjanjian ini akan diatur dalam addendum atau Perjanjian terpisah, disesuaikan dengan kebutuhan <strong>PIHAK PERTAMA</strong> dan merupakan satu kesatuan bagian yang tidak terpisahkan dengan Perjanjian ini.</p>
            
            <p><strong>PASAL 4<br>KETERPISAHAN</strong></p>
            <p>Setiap klausul dalam Perjanjian ini adalah terpisah dan berdiri sendiri, apabila ada klausul yang dinyatakan tidak berlaku atau tidak dapat dilaksanakan menurut hukum yang berlaku, maka klausul-klausul lainnya tidak akan terpengaruh dan klausul yang dinyatakan tidak berlaku atau tidak dapat dilaksanakan menurut hukum akan diubah agar menjadi sah dan dapat dilaksanakan semaksimal mungkin menurut hukum.</p>
            
            <p><strong>PASAL 5<br>PERNYATAAN PIHAK KEDUA</strong></p>
            <p>Melalui Perjanjian ini <strong>PIHAK KEDUA</strong> menyatakan bahwa :</p>
            <ol>
                <li><strong>PIHAK KEDUA</strong> telah membaca, mengerti dan bersedia untuk melaksanakan sepenuhnya Perjanjian ini;</li>
                <li><strong>PIHAK KEDUA</strong> telah diberikan kesempatan untuk meminta keterangan dan penjelasan lebih lanjut tentang hal-hal yang kurang dapat dimengerti dari Perjanjian ini;</li>
                <li>Kewajiban-kewajiban <strong>PIHAK KEDUA</strong> dalam Perjanjian ini tetap berlaku secara penuh terhadap <strong>PIHAK KEDUA</strong>, walaupun <strong>PIHAK KEDUA</strong> sudah tidak terikat dalam Perjanjian Kerja dengan <strong>PIHAK PERTAMA</strong> dengan alasan apapun juga.</li>
            </ol>
            
            <p>Demikian Perjanjian ini dibuat dan ditandatangani oleh <strong>PARA PIHAK</strong> dengan penuh kesadaran dan tanpa paksaan dari pihak manapun pada hari, tanggal, bulan dan tahun sebagaimana di awal Perjanjian ini.</p>
        </td>
    </tr>
</table>

<!-- Tanda tangan -->
<table class="signature-table">
    <tr>
        <td>
            <strong>PIHAK PERTAMA</strong><br><br><br>
            <span class="underline"></span><br>
            Direktur Umum
        </td>
        <td>
            <strong>PIHAK KEDUA</strong><br><br><br>
            <span class="underline"></span><br>
            <?= $pegawai['employee_name'] ?>
        </td>
    </tr>
</table>

<table class="signature-table">
    <tr>
        <td>
            <strong>Saksi</strong><br><br><br>
            <span class="underline"></span><br>
            General Manager Personalia dan Umum
        </td>
        <td>
            <strong>Saksi</strong><br><br><br>
            <span class="underline"></span><br>
            Pimpinan Karyawan
        </td>
    </tr>
</table>

</body>
</html>
