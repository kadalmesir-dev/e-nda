<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-4 shadow-sm">
        <div class="row align-items-center p-4">
            <div class="col-12 col-md-5 text-center order-md-last">
                <img
                    src="<?= base_url('assets/'); ?>img/illustrations/man-with-laptop-light.png"
                    class="img-fluid"
                    style="max-height: 160px;"
                    alt="Agreement Document"
                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                    data-app-light-img="illustrations/man-with-laptop-light.png" />
            </div>
            <div class="col-12 col-md-7">
                <div class="card-body">
                    <h4 class="card-title text-primary fs-5">Non-Disclosure Agreement </h4>
                    <p class="mb-3 fs-6">
                        <span class="fw-semibold bg-gradient bg-secondary text-white px-1 py-1 rounded-1 shadow-sm text-nowrap">
                            Perjanjian Kerahasiaan
                        </span>&nbsp;
                        ini dibuat antara <span class="fw-bold">PT. Dan Liris</span> dan karyawan sebagai bentuk komitmen terhadap
                        perlindungan informasi rahasia perusahaan.
                    </p>
                    <p class="fst-italic text-dark fw-bold" id="nomor_tampil">

                    </p>

                    <p class="fst-italic text-dark fw-bold">
                        "Kepercayaan adalah fondasi dari setiap hubungan profesional."
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0 text-primary">Pihak Pertama</h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('surat_keterangan/index'); ?>" method="post">
                        <input type="hidden" id="signature-data" name="signature">
                        <input type="hidden" name="uniquecode" id="uniquecode" value="<?= $uniquecode;?>">
                        <input type="hidden" name="nomor" id="nomor">
                        
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name_dir" name="name_dir" value="Bantu Harrison Silaen" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Jabatan</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text"><i class='bx bxs-briefcase'></i></span>
                                    <input
                                        class="form-control"
                                        type="text"
                                        id="grade_dir" name="grade_dir" value="Direktur Umum" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <label class="col-sm-2 form-label" for="basic-icon-default-message">Alamat Kantor</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-message2" class="input-group-text"><i class='bx bxs-business'></i></span>
                                    <textarea
                                        id="address_dir"
                                        name="address_dir"
                                        class="form-control"
                                        placeholder="Alamat kantor"
                                        aria-label="alamat kantor"
                                        aria-describedby="basic-icon-default-message2">Jl. Merapi No. 23, Desa/Kelurahan Banaran, Kecamatan Grogol, Kabupaten Sukoharjo</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="card-header d-flex align-items-center m-0 p-0 justify-content-between mb-3">
                            <h5 class="mb-0 text-primary">Pihak Kedua</h5>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="employee_name"
                                        value="<?= $employee['NAMA'] ?? '' ?>"
                                        name="employee_name" />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">NIK</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class='bx bx-dialpad-alt'></i></span>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="employee_nik"
                                        value="<?= $employee['NIK_KTP'] ?? '' ?>"
                                        name="employee_nik" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Jabatan</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text"><i class='bx bxs-briefcase'></i></span>
                                    <input
                                        class="form-control"
                                        type="text"
                                        id="employee_grade"
                                        value="<?= $employee['JABATAN'] ?? '' ?>"
                                        name="employee_grade" />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Bagian</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text"><i class='bx bxs-briefcase'></i></span>
                                    <input
                                        class="form-control"
                                        type="text"
                                        id="employee_unit"
                                        value="<?= $employee['UNIT'] ?? '' ?>"
                                        name="employee_unit" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="basic-icon-default-message">Alamat Kantor</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-message2" class="input-group-text"><i class='bx bxs-business'></i></span>
                                    <textarea
                                        id="employee_address"
                                        name="employee_address"
                                        class="form-control"
                                        placeholder="Alamat kantor"
                                        aria-label="alamat kantor"
                                        aria-describedby="basic-icon-default-message2"><?= $employee['ALAMAT'] ?? '' ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 col-12">
                            <div class="alert alert-warning border-danger">
                                <h6 class="alert-heading fw-bold mb-2 text-danger">
                                    PARA PIHAK dengan ini terlebih dahulu menerangkan hal-hal sebagai berikut:
                                </h6>
                                <ol class="mb-0 text-secondary">
                                    <li>
                                        <strong>PIHAK PERTAMA</strong> dan <strong>PIHAK KEDUA</strong> sebelumnya telah saling mengikatkan diri dalam suatu hubungan kerja berdasarkan
                                        <b>Perjanjian Kerja Waktu Tidak Tertentu</b>, di mana <strong>PIHAK PERTAMA</strong> telah menerima <strong>PIHAK KEDUA</strong> sebagai karyawan perusahaan
                                        <strong>PIHAK PERTAMA</strong> dengan status <b>Karyawan Kerja Waktu Tidak Tertentu</b>.
                                    </li>
                                    <br>
                                    <li>
                                        Pekerjaan yang dilakukan oleh <strong>PIHAK KEDUA</strong> dalam perjanjian tersebut melibatkan informasi penting milik
                                        <strong>PIHAK PERTAMA</strong>, yang tidak boleh diketahui oleh pihak lain di luar kepentingan <strong>PIHAK PERTAMA</strong>.
                                    </li>
                                    <br>
                                    <li>
                                        <strong>PIHAK PERTAMA</strong> bermaksud membuat kesepakatan dengan <strong>PIHAK KEDUA</strong> yang tertuang dalam
                                        <b>Perjanjian Kerahasiaan</b> untuk menjaga informasi rahasia tersebut.
                                    </li>
                                    <br>
                                    <li>
                                        <strong>PIHAK KEDUA</strong> setuju mengikatkan diri dengan <strong>PIHAK PERTAMA</strong> dalam suatu <b>Perjanjian Kerahasiaan</b>.
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="mb-3 col-12">
                            <div class="alert alert-warning border-danger">
                                <h6 class="alert-heading fw-bold mb-3 text-center text-danger">
                                    PASAL 1<br>INFORMASI RAHASIA
                                </h6>
                                <ol class="mb-0 text-secondary">
                                    <li>
                                        <b>Informasi Rahasia</b> adalah informasi yang diterima oleh <strong>PIHAK KEDUA</strong> dalam hubungan kerjanya
                                        dengan <strong>PIHAK PERTAMA</strong>, yang sifatnya tidak dapat diungkapkan kepada pihak lain di luar
                                        perjanjian ini tanpa izin dari <strong>PIHAK PERTAMA</strong>. Apabila diungkapkan, dapat menimbulkan kerugian
                                        bagi perusahaan baik materiil maupun imateriil.
                                    </li>
                                    <li>
                                        <b>Informasi Rahasia</b> mencakup namun tidak terbatas pada informasi bidang teknologi dan/atau bisnis,
                                        Hak Kekayaan Intelektual, informasi terkait inovasi dan penemuan baru, desain, produk, perencanaan,
                                        perhitungan, konsep, sistem, program komputer, rencana marketing dan bisnis, pembiayaan, informasi keuangan,
                                        penentuan harga, dokumen perusahaan, strategi pemasaran, daftar rekanan, dan sebagainya.
                                    </li>
                                    <li>
                                        <b>Informasi Rahasia</b> dapat berbentuk namun tidak terbatas pada dokumentasi, diagram alur (flow chart),
                                        kode program (source code), pengetahuan produk (product knowledge), kumpulan data (database), tulisan dan/atau lisan,
                                        gambar, laporan, catatan, rekaman, dan sebagainya.
                                    </li>
                                    <li>
                                        <strong>PIHAK KEDUA</strong> memahami dan menyetujui bahwa <b>Informasi Rahasia</b> merupakan milik
                                        <strong>PIHAK PERTAMA</strong>. Setelah hubungan kerja berakhir, <strong>PIHAK KEDUA</strong> harus berhenti menggunakan
                                        informasi rahasia dan/atau menyerahkannya kepada <strong>PIHAK PERTAMA</strong>. Jika diperlukan, <strong>PIHAK PERTAMA</strong>
                                        dapat meminta <strong>PIHAK KEDUA</strong> untuk memusnahkan informasi rahasia tersebut, termasuk salinannya,
                                        yang dibuat dalam suatu berita acara pemusnahan informasi.
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="mb-3 col-12">
                            <div class="alert alert-warning border-danger">
                                <h6 class="text-center fw-bold text-danger">PASAL 2 <br> LARANGAN PENGUNGKAPAN INFORMASI RAHASIA</h6>
                                <ol class="mb-0 text-secondary">
                                    <li>
                                        <strong>PIHAK KEDUA</strong> mengerti dan bersedia mengikatkan diri secara hukum bahwa selama berstatus
                                        dan/atau setelah tidak berstatus sebagai Karyawan, <strong>PIHAK KEDUA</strong> tidak akan, tanpa persetujuan
                                        tertulis terlebih dahulu dari <strong>PIHAK PERTAMA</strong>, baik secara langsung maupun tidak langsung, lisan atau
                                        tertulis untuk :
                                        <ul>
                                            <li>
                                                Tidak menyebarluaskan, mentransfer, mengakses komputer atau sistem elektronik milik Karyawan
                                                lain dan menggunakan Informasi Rahasia yang dimaksud untuk menguntungkan diri sendiri, pihak
                                                lain, perusahaan lain, maupun entitas lain di luar kepentingan <strong>PIHAK PERTAMA</strong>;
                                            </li>
                                            <li>
                                                Tidak mengumpulkan dan menyebarluaskan data pribadi dari Pejabat maupun Karyawan <strong>PIHAK
                                                    PERTAMA</strong> kecuali berkaitan dengan pekerjaan atas izin <strong>PIHAK PERTAMA</strong>;
                                            </li>
                                            <li>
                                                Tidak menggunakan Informasi Rahasia untuk tujuan apapun dan dengan cara apapun yang dapat
                                                merugikan <strong>PIHAK PERTAMA</strong> dan/atau menguntungkan <strong>PIHAK KEDUA</strong> secara pribadi seperti
                                                menduplikat, melakukan pembajakan, mengirim virus, melakukan penghapusan data baik dalam
                                                bentuk soft maupun hard file secara sebagian maupun keseluruhan, melakukan perusakan, serta
                                                mengambil gambar dan menyebarluaskannya.
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        Apabila <strong>PIHAK KEDUA</strong> terbukti melakukan pelanggaran, maka <strong>PIHAK PERTAMA</strong> dapat memberikan
                                        sanksi kepada <strong>PIHAK KEDUA</strong> berupa Surat Peringatan sampai dengan Pemutusan Hubungan Kerja
                                        dengan tidak mengurangi hak <strong>PIHAK PERTAMA</strong> untuk menempuh jalur hukum. Apabila <strong>PIHAK
                                            PERTAMA</strong> menemukan adanya kerugian yang disebabkan oleh pelanggaran tersebut, maka <strong>PIHAK
                                            KEDUA</strong> bertanggung jawab atas kerugian tersebut.
                                    </li>
                                    <li>
                                        <strong>PIHAK KEDUA</strong> sepakat bahwa pada saat hubungan kerja antara <strong>PIHAK PERTAMA</strong> <strong>PIHAK
                                            KEDUA</strong> berakhir, <strong>PIHAK KEDUA</strong> akan menyerahkan kepada <strong>PIHAK PERTAMA</strong> setiap perangkat,
                                        rekaman, data, catatan, material peralatan, benda atau dokumen-dokumen lain yang mengandung
                                        Informasi Rahasia milik <strong>PIHAK PERTAMA</strong>.
                                    </li>
                                </ol>
                            </div>
                        </div>


                        <div class="mb-3 col-12">
                            <div class="alert alert-warning border-danger">
                                <div class="mb-3 col-12 text-center">
                                    <h6 class="alert-heading fw-bold mb-3 text-danger">
                                        PASAL 3 <br> UMUM
                                    </h6>
                                </div>
                                <p class="mb-0 text-secondary">
                                    Ketentuan lainnya yang belum diatur dalam Perjanjian ini akan diatur dalam addendum atau
                                    Perjanjian terpisah, disesuaikan dengan kebutuhan <strong>PIHAK PERTAMA</strong> dan merupakan
                                    satu kesatuan bagian yang tidak terpisahkan dengan Perjanjian ini.
                                </p>
                            </div>
                        </div>

                        <div class="mb-3 col-12">
                            <div class="alert alert-warning border-danger">
                                <div class="mb-3 col-12 text-center">
                                    <h6 class="alert-heading fw-bold mb-3 text-danger">
                                        PASAL 4 <br> KETERPISAHAN
                                    </h6>
                                </div>
                                <p class="mb-0 text-secondary">
                                    Setiap klausul dalam Perjanjian ini adalah terpisah dan berdiri sendiri, apabila ada klausul yang
                                    dinyatakan tidak berlaku atau tidak dapat dilaksanakan menurut hukum yang berlaku, maka klausulklausul lainnya tidak akan terpengaruh dan klausul yang dinyatakan tidak berlaku atau tidak dapat
                                    dilaksanakan menurut hukum akan diubah agar menjadi sah dan dapat dilaksanakan semaksimal
                                    mungkin menurut hukum.

                                </p>
                            </div>
                        </div>


                        <div class="mb-3 col-12">
                            <div class="alert alert-warning border-danger">
                                <div class="mb-3 col-12 text-center">
                                    <h6 class="alert-heading fw-bold mb-3 text-danger">
                                        PASAL 5 <br> PERNYATAAN PIHAK KEDUA
                                    </h6>
                                </div>
                                <p class="mb-0 text-secondary">
                                    Melalui Perjanjian ini <strong>PIHAK KEDUA</strong> menyatakan bahwa:
                                </p>
                                <ol class="mb-0 text-secondary">
                                    <li>
                                        <strong>PIHAK KEDUA</strong> telah membaca, mengerti, dan bersedia untuk melaksanakan sepenuhnya Perjanjian ini.
                                    </li>
                                    <li>
                                        <strong>PIHAK KEDUA</strong> telah diberikan kesempatan untuk meminta keterangan dan penjelasan lebih lanjut
                                        tentang hal-hal yang kurang dapat dimengerti dari Perjanjian ini.
                                    </li>
                                    <li>
                                        Kewajiban-kewajiban <strong>PIHAK KEDUA</strong> dalam Perjanjian ini tetap berlaku secara penuh terhadap
                                        <strong>PIHAK KEDUA</strong>, walaupun <strong>PIHAK KEDUA</strong> sudah tidak terikat dalam Perjanjian Kerja
                                        dengan <strong>PIHAK PERTAMA</strong> dengan alasan apapun juga.
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="container py-4">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6">
                                    <div class="card shadow-lg">
                                        <div class="card-header bg-secondary text-white text-center fw-bold">
                                            <i class="fa-solid fa-signature me-2 fa-2x"></i> Tanda Tangan Karyawan
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="border rounded bg-light p-2 shadow-sm">
                                                <canvas id="signature-pad" class="w-100" style="height: 250px;"></canvas>
                                            </div>
                                            <div class="d-flex justify-content-center gap-3 mt-3">
                                                <button id="clear" type="button" class="btn btn-outline-danger btn-sm">
                                                    <i class="fas fa-eraser"></i> Hapus
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 position-relative">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-paper-plane me-2"></i>Kirim
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- JS -->
<script>
    // Fungsi untuk mengonversi bulan ke angka Romawi
    function getRomanMonth(month) {
        const months = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII'];
        return months[month - 1];
    }

    // Ambil tanggal saat ini
    const currentDate = new Date();
    const year = currentDate.getFullYear();
    const month = getRomanMonth(currentDate.getMonth() + 1); // +1 karena bulan dimulai dari 0

    // Ambil nomor urut dari localStorage atau mulai dari 1 jika belum ada
    let nomorUrut = localStorage.getItem('nomorUrut') || 1;
    nomorUrut = String(nomorUrut).padStart(4, '0'); // Menambahkan 0 jika nomor kurang dari 4 digit
    localStorage.setItem('nomorUrut', parseInt(nomorUrut) + 1); // Update nomor urut untuk kunjungan berikutnya

    // Gabungkan
    const nomor = `${nomorUrut}/DL-NDA-LGL/${month}/${year}`;

    // Menampilkan nomor pada elemen dengan id "nomor"
    document.getElementById('nomor_tampil').innerText = 'Nomor : ' + nomor;

    // Set Nilai
    document.getElementById('nomor').value = nomor;



    // Fungsi Signature TTD
    const canvas = document.getElementById("signature-pad");
    const signaturePad = new SignaturePad(canvas);

    function resizeCanvas() {
        const ratio = Math.max(window.devicePixelRatio || 1, 1);
        canvas.width = canvas.offsetWidth * ratio;
        canvas.height = 250 * ratio;
        canvas.getContext("2d").scale(ratio, ratio);
        signaturePad.clear(); // Bersihkan setelah resize agar tidak blur
    }

    // Setel ukuran canvas saat halaman dimuat
    window.addEventListener("load", resizeCanvas);
    window.addEventListener("resize", resizeCanvas);

    // Tombol Clear
    document.getElementById("clear").addEventListener("click", () => {
        event.preventDefault();
        signaturePad.clear();
    });

    // Kondisi Signature
    document.querySelector("form").addEventListener("submit", function(event) {
        if (signaturePad.isEmpty()) {
            Swal.fire({
                title: "Tanda Tangan Wajib Di Isi!",
                text: "Harap tanda tangan terlebih dahulu sebelum mengirim.",
                icon: "warning",
                confirmButtonText: "Oke"
            });
            event.preventDefault();
        } else {
            document.getElementById("signature-data").value = signaturePad.toDataURL();
        }
    });
</script>