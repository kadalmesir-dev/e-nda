<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-4 shadow-sm">
        <div class="row align-items-center px-4 py-3 g-3">
            <!-- Ilustrasi -->
            <div class="col-12 col-md-6 text-center">
                <img
                    src="<?= base_url('assets/'); ?>img/illustrations/interactive_3.png"
                    class="img-fluid"
                    style="max-height: 250px;"
                    alt="Thank You Illustration"
                    data-app-dark-img="illustrations/interactive_3.png"
                    data-app-light-img="illustrations/interactive_3.png" />
            </div>

            <!-- Teks ucapan -->
            <div class="col-12 col-md-6 text-center text-md-start d-flex align-items-center">
                <div class="card-body p-0">
                    <h1 class="text-dark fw-bold mb-3">Oops !</h1>
                    <p class="text-secondary fs-5 mb-0">
                        Terimakasih <b><?= $get_data['employee_name'];?></b>, anda sebelumnya telah menandatangani e-NDA karyawan ini pada tanggal <?= date('d-m-Y', strtotime($get_data['signature_date'])); ?>, sampai jumpa kembali
                        di lain waktu.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Js Munculkan alert & Style JS -->

<?php if ($this->session->flashdata('success')) : ?>
    <style>
        /* Icon checklist tetap putih, tapi ring transparan */
        .swal2-icon.swal2-success {
            border-color: #fff !important;
        }

        .swal2-icon.swal2-success [class^="swal2-success-line"] {
            background-color: #fff !important;
        }

        .swal2-icon.swal2-success .swal2-success-ring {
            border: 4px solid rgba(255, 255, 255, 0.5) !important;
        }

        .swal2-icon.swal2-success .swal2-success-fix {
            background-color: transparent !important;
        }

        .swal2-title,
        .swal2-html-container {
            color: #fff !important;
        }
    </style>



    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            background: '#28a745',
            color: '#fff',
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        Toast.fire({
            icon: 'success',
            title: '<?= $this->session->flashdata('success'); ?>'
        });
    </script>
<?php endif; ?>