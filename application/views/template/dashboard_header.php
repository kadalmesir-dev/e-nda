<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?= base_url('assets/'); ?>images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="<?= base_url('assets/'); ?>plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="<?= base_url('assets/'); ?>plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="<?= base_url('assets/'); ?>plugins/highcharts/css/highcharts.css" rel="stylesheet" />
	<link href="<?= base_url('assets/'); ?>plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<link href="<?= base_url('assets/'); ?>plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="<?= base_url('assets/'); ?>css/pace.min.css" rel="stylesheet" />
	<script src="<?= base_url('assets/'); ?>js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/'); ?>css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="<?= base_url('assets/'); ?>css/app.css" rel="stylesheet">
	<link href="<?= base_url('assets/'); ?>css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/dark-theme.css" />
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/semi-dark.css" />
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/header-colors.css" />
	<title><?= $judul_website; ?></title>
</head>

<body>
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="<?= base_url('/assets/img/illustrations/dan_liris.png'); ?>" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Dan Liris</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
				</div>
			</div>
			<!--navigation-->
			<?php
			$get_session = $this->session->userdata('role_id');

			// Cek session dulu supaya nggak error
			if (!$get_session) {
				show_error('Session role_id tidak ditemukan.');
			}

			// Query utama menu
			$query = "SELECT mst_nda_menu.id, menu
          FROM mst_nda_menu
          JOIN mst_nda_access_menu ON mst_nda_menu.id = mst_nda_access_menu.menu_id
          WHERE mst_nda_access_menu.role_id = $get_session
          ORDER BY mst_nda_access_menu.menu_id ASC";

			$menu = $this->db->query($query)->result_array();
			?>

			<ul class="metismenu" id="menu">
				<?php foreach ($menu as $m) : ?>
					<li class="menu-label"><?= $m['menu']; ?></li>

					<?php
					$menu_id = $m['id'];
					$query_sub_menu = "SELECT *
                           FROM mst_nda_sub_menu
                           JOIN mst_nda_menu ON mst_nda_sub_menu.menu_id = mst_nda_menu.id
                           WHERE mst_nda_sub_menu.menu_id = $menu_id
                           AND mst_nda_sub_menu.is_active = 1";

					$sub_menu = $this->db->query($query_sub_menu)->result_array();
					?>

					<?php foreach ($sub_menu as $sm) : ?>
						<li>
							<a href="<?= base_url($sm['url']); ?>">
								<div class="parent-icon"><i class="<?= $sm['icon']; ?>"></i></div>
								<div class="menu-title"><?= $sm['title']; ?></div>
							</a>
						</li>
					<?php endforeach; ?>

				<?php endforeach; ?>
			</ul>
		</div>