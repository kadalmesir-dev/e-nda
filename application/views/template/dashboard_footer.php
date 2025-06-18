	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="<?= base_url('assets/'); ?>js/jquery.min.js"></script>
	<script src="<?= base_url('assets/'); ?>vendor/libs/jquery/jquery.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/simplebar/js/simplebar.min.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/highcharts/js/highcharts.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/highcharts/js/exporting.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/highcharts/js/variable-pie.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/highcharts/js/export-data.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/highcharts/js/accessibility.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="<?= base_url('assets/'); ?>plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/index2.js"></script>
	<!--app JS-->
	<script src="<?= base_url('assets/'); ?>js/app.js"></script>
	<script>
		new PerfectScrollbar('.customers-list');
		new PerfectScrollbar('.store-metrics');
		new PerfectScrollbar('.product-list');
	</script>

	<!-- JS Datatable -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable({
				"paging": true,
				"lengthChange": true,
				"searching": true,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"responsive": true
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#datatable-pegawai').DataTable({
				lengthChange: false,
				responsive: false,
				searching: true,
				autoWidth: true,
				dom: '<"top"f>rt<"bottom"lp><"clear">', // Memindahkan filter ke area top
			});
		});
	</script>
	<style>
		/* Atur pencarian agar mentok ke kanan */
		.dataTables_filter {
			text-align: right;
			/* Posisi elemen ke kanan */
		}

		.dataTables_filter label {
			float: right;
			/* Seluruh elemen ke kanan */
			display: flex;
			/* Gunakan flexbox untuk menyamakan tinggi */
			align-items: center;
			/* Pastikan "Search:" sejajar vertikal dengan input */
			margin-bottom: 20px;
			/* Tambahkan jarak di bawah kolom pencarian */
		}

		.dataTables_filter input {
			margin-left: 10px;
			/* Beri jarak antara "Search:" dan kotak input */
		}
	</style>
	</body>

	</html>