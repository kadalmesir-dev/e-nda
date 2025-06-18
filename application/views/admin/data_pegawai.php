<!-- Start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <?= $this->session->flashdata('pesan'); ?>

        <!-- Breadcrumb -->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Admin</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Pegawai</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Main content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-pegawai" class="table table-striped table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>Jabatan</th>
                                        <th>Unit</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($data_pegawai as $dp) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $dp['employee_name']; ?></td>
                                            <td><?= $dp['employee_nik']; ?></td>
                                            <td><?= $dp['employee_grade']; ?></td>
                                            <td><?= $dp['employee_unit']; ?></td>
                                            <td>
                                                <div class="d-flex order-actions">
                                                    <a href="javascript:;" class="ms-3 btn-pdf"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#new_detail_pegawai"
                                                        data-id="<?= $dp['id']; ?>"
                                                        data-url="<?= base_url('dashboard_admin/cetak_pdf/' . $dp['id']); ?>">
                                                        <i class='bx bxs-printer'></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal PDF Preview -->
        <div class="modal fade" id="new_detail_pegawai" tabindex="-1" aria-labelledby="previewPDFLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" style="max-width: 90%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="previewPDFLabel">Preview PDF Pegawai</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <iframe id="pdfFrame" src="" width="100%" height="600px" style="border: none;"></iframe>
                    </div>
                    <div class="modal-footer">
                        <a href="#" id="openNewTabBtn" target="_blank" class="btn btn-primary">Buka di Tab Baru</a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- JavaScript (wajib setelah jQuery & Bootstrap) -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const modal = document.getElementById('new_detail_pegawai');
        const iframe = document.getElementById('pdfFrame');
        const openTabLink = document.getElementById('openNewTabBtn');

        modal.addEventListener('show.bs.modal', function(event) {
            const trigger = event.relatedTarget;
            const pdfUrl = trigger.getAttribute('data-url');

            console.log("Opening PDF URL:", pdfUrl);

            iframe.src = pdfUrl;
            openTabLink.href = pdfUrl;
        });

        modal.addEventListener('hidden.bs.modal', function() {
            iframe.src = "";
        });
    });
</script>