<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Aplikasi Monitoring LOG - PT Sumber Alam Santoso Pratama</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="http://localhost/log/assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://localhost/log/assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://localhost/log/assets/fonts/style.css">
		<link rel="stylesheet" href="http://localhost/log/assets/css/main.css">
		<link rel="stylesheet" href="http://localhost/log/assets/css/main-responsive.css">
		<link rel="stylesheet" href="http://localhost/log/assets/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="http://localhost/log/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
		<link rel="stylesheet" href="http://localhost/log/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
		<link rel="stylesheet" href="http://localhost/log/assets/css/theme_light.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="http://localhost/log/assets/css/print.css" type="text/css" media="print"/>
		<!--[if IE 7]>
		<link rel="stylesheet" href="http://localhost/log/assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link href="http://localhost/log/assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
		<link href="http://localhost/log/assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>

		<link rel="stylesheet" href="http://localhost/log/assets/plugins/select2/select2.css">
		<link rel="stylesheet" href="http://localhost/log/assets/plugins/datepicker/css/datepicker.css">
		<link rel="stylesheet" href="http://localhost/log/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
		<link rel="stylesheet" href="http://localhost/log/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
		<link rel="stylesheet" href="http://localhost/log/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
		<link rel="stylesheet" href="http://localhost/log/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
		<link rel="stylesheet" href="http://localhost/log/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
		<link rel="stylesheet" href="http://localhost/log/assets/plugins/summernote/build/summernote.css">
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" type="text/css" href="http://localhost/log/assets/plugins/select2/select2.css" />
		<link rel="stylesheet" href="http://localhost/log/assets/plugins/DataTables/media/css/DT_bootstrap.css" />
		<link rel="shortcut icon" href="logo.ico" />
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body bgcolor="red">
		<!-- start: HEADER -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<!-- start: TOP NAVIGATION CONTAINER -->
			<div class="container">
				<div class="navbar-header">
					<!-- start: RESPONSIVE MENU TOGGLER -->
					<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
						<span class="clip-list-2"></span>
					</button>
					<!-- end: RESPONSIVE MENU TOGGLER -->
					<!-- start: LOGO -->
					<a class="navbar-brand" href="">
						<?php $jabatan = $this->session->userdata('jabatan'); echo $jabatan; ?><i class="clip-clip"></i>PT. SUMBER ALAM
					</a>
					<!-- end: LOGO -->
				</div>
				<div class="navbar-tools">
					<!-- start: TOP NAVIGATION MENU -->
					<ul class="nav navbar-right">

						<!-- start: USER DROPDOWN -->
						<li class="dropdown current-user">
							<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
								<img src="http://localhost/log/assets/images/logo.PNG" class="img-rounded" alt="" width="30px">
								<span class="username"><?php $user = $this->session->userdata('nama'); echo $user; ?></span>
								<i class="clip-chevron-down"></i>
							</a>
							<ul class="dropdown-menu">
								<!-- <li>
									<a href="#">
										<i class="clip-user-2"></i>
										&nbsp;My Profile
									</a>
								</li> -->
								<li>
									<a href="http://localhost/log/auth/logout">
										<i class="clip-exit"></i> &nbsp;Logout
									</a>
								</li>
							</ul>
						</li>
						<!-- end: USER DROPDOWN -->
					</ul>
					<!-- end: TOP NAVIGATION MENU -->
				</div>
			</div>
			<!-- end: TOP NAVIGATION CONTAINER -->
		</div>
		<!-- end: HEADER -->
		<?php $id = $this->uri->segment(1);
		?>
		<!-- start: MAIN CONTAINER -->
		<div class="main-container">
			<div class="navbar-content">
				<!-- start: SIDEBAR -->
				<div class="main-navigation navbar-collapse collapse">
					<!-- start: MAIN MENU TOGGLER BUTTON -->
					<div class="navigation-toggler">
						<i class="clip-chevron-left"></i>
						<i class="clip-chevron-right"></i>
					</div>
					<!-- end: MAIN MENU TOGGLER BUTTON -->

          <!-- start: MAIN NAVIGATION MENU -->
					<?php
					$user = $this->session->userdata('jabatan');
					$simpan = $user;
					if ($simpan == "") {
							redirect('auth','refresh');
					} elseif ($simpan == "Satpam") {
							redirect('bpk_satpam','refresh');
					}
					 ?>
          <ul class="main-navigation-menu">
						<li class=<?php if($id == "bpk"){ echo "active";} ?>>
              <a href="<?php echo site_url('bpk');?>"><i class="clip-stack"></i>
                <span class="title"> BPK </span><span class="selected"></span>
              </a>
            </li>
            <li class=<?php if($id == "serah_terima_log"){ echo "active";} ?>>
              <a href="<?php echo site_url('serah_terima_log');?>"><i class="clip-thumbs-up"></i>
                <span class="title"> Penerimaan Log </span><span class="selected"></span>
              </a>
            </li>
            <li class=<?php if($id == "bongkar_log"){ echo "active";} ?>>
              <a href="<?php echo site_url('bongkar_log');?>"><i class="clip-stackoverflow"></i>
                <span class="title"> Bongkar LOG </span><span class="selected"></span>
              </a>
            </li>
						<li class=<?php if($id == "cek_log" || $id == "bansaw1" || $id == "bansaw2" || $id == "bansaw3"){ echo "active";} ?>>
							<a href="javascript:void(0)"><i class="clip-screen"></i>
								<span class="title"> Monitoring LOG </span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">
								<li class=<?php if($id == "cek_log"){ echo "active";} ?>>
		              <a href="<?php echo site_url('cek_log');?>"><i class="clip-bars"></i>
		                <span class="title"> Monitoring Log Rotary </span><span class="selected"></span>
		              </a>
		            </li>
		            <li class=<?php if($id == "bansaw1"){ echo "active";} ?>>
		              <a href="<?php echo site_url('bansaw1');?>"><i class="clip-bars"></i>
		                <span class="title"> Monitoring Bansaw 1</span><span class="selected"></span>
		              </a>
		            </li>
								<li class=<?php if($id == "bansaw2"){ echo "active";} ?>>
		              <a href="<?php echo site_url('bansaw2');?>"><i class="clip-bars"></i>
		                <span class="title"> Monitoring Bansaw 2</span><span class="selected"></span>
		              </a>
		            </li>
								<li class=<?php if($id == "bansaw3"){ echo "active";} ?>>
		              <a href="<?php echo site_url('bansaw3');?>"><i class="clip-bars"></i>
		                <span class="title"> Monitoring Bansaw 3</span><span class="selected"></span>
		              </a>
		            </li>
							</ul>
						</li>
						<li class=<?php if($id == "rekap_penerimaan" || $id == "rekap_pemakaian" || $id == "rekap_per_bpk" || $id == "rekap_stok_akhir"){ echo "active";} ?>>
							<a href="javascript:void(0)"><i class="clip-health"></i>
								<span class="title"> Rekap LOG </span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">
								<li class=<?php if($id == "rekap_penerimaan"){ echo "active";} ?>>
									<a href="<?php echo site_url('rekap_penerimaan');?>"><i class="clip-copy-3"></i>
										<span class="title"> Rekap Penerimaan LOG</span><span class="selected"></span>
									</a>
								</li>
								<li class=<?php if($id == "rekap_pemakaian"){ echo "active";} ?>>
									<a href="<?php echo site_url('rekap_pemakaian');?>"><i class="clip-copy-3"></i>
										<span class="title"> Rekap Pemakaian LOG</span><span class="selected"></span>
									</a>
								</li>
								<li class=<?php if($id == "rekap_per_bpk"){ echo "active";} ?>>
		              <a href="<?php echo site_url('rekap_per_bpk');?>"><i class="clip-copy-3"></i>
		                <span class="title"> Rekap Stok Persediaan </span><span class="selected"></span>
		              </a>
		            </li>
								<li class=<?php if($id == "rekap_stok_akhir"){ echo "active";} ?>>
		              <a href="<?php echo site_url('rekap_stok_akhir');?>"><i class="clip-copy-3"></i>
		                <span class="title"> Rekap Stok Akhir </span><span class="selected"></span>
		              </a>
		            </li>
							</ul>
						</li>
						<li class=<?php if($id == "kubik" || $id == "harga_m3" || $id == "grade"){ echo "active";} ?>>
							<a href="javascript:void(0)"><i class="clip-database"></i>
								<span class="title"> Data Master </span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">
								<li  class=<?php if($id == "kubik"){ echo "active";} ?>>
									<a href="<?php echo site_url('kubik');?>"><i class="clip-cube"></i>
										<span class="title"> Kubik </span><span class="selected"></span>
										<!-- <span class="badge badge-new">new</span> -->
									</a>
								</li>
								<li class=<?php if($id == "harga_m3"){ echo "active";} ?>>
									<a href="<?php echo site_url('harga_m3');?>"><i class="clip-banknote"></i>
										<span class="title"> Harga per kubik </span><span class="selected"></span>
										<!-- <span class="badge badge-new">new</span> -->
									</a>
								</li>
								<li class=<?php if($id == "grade"){ echo "active";} ?>>
									<a href="<?php echo site_url('grade');?>"><i class="clip-tree"></i>
										<span class="title"> grade </span><span class="selected"></span>
										<!-- <span class="badge badge-new">new</span> -->
									</a>
								</li>
							</ul>
						</li>
						<li class=<?php if($id == "user"){ echo "active";} ?>>
							<a href="<?php echo site_url('user');?>"><i class="clip-users-2"></i>
								<span class="title"> Data USER</span><span class="selected"></span>
							</a>
						</li>
        <!-- area menu dinamsis -->

        <!-- area end menu dinamis -->

      </ul>
					<!-- end: MAIN NAVIGATION MENU -->
				</div>
				<!-- end: SIDEBAR -->
			</div>
			<!-- start: PAGE -->
			<div class="main-content">
				<!-- start: PANEL CONFIGURATION MODAL FORM -->
				<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title">Panel Configuration</h4>
							</div>
							<div class="modal-body">
								Here will be a configuration form
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Close
								</button>
								<button type="button" class="btn btn-primary">
									Save changes
								</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- end: SPANEL CONFIGURATION MODAL FORM -->
				<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<ol class="breadcrumb">
								<li>
									<i class="clip-home-3"></i>
									<a href="index.php">
										Home
									</a>
								</li>
								<li class="active">
									NO BPK : <?php echo $this->session->userdata('no_bpk'); ?>
								</li>

							</ol>

							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->

<!-- content dinamsis -->

        <div class="row">
          <div style="margin:20px;">
          <?php
          if(isset($_view) && $_view){
          $this->load->view($_view);
        } else {
          redirect('bpk');
        }

          ?>
        </div>

        </div>

<!-- end content dinamis -->
				</div>
			</div>
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->
		<div class="footer clearfix">
			<div class="footer-inner">
				2017 &copy; support by Poliwangi.
			</div>
			<div class="footer-items">
				<span class="go-top"><i class="clip-chevron-up"></i></span>
			</div>
		</div>
		<!-- end: FOOTER -->
		<div id="event-management" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title">Event Management</h4>
					</div>
					<div class="modal-body"></div>
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-light-grey">
							Close
						</button>
						<button type="button" class="btn btn-danger remove-event no-display">
							<i class='fa fa-trash-o'></i> Delete Event
						</button>
						<button type='submit' class='btn btn-success save-event'>
							<i class='fa fa-check'></i> Save
						</button>
					</div>
				</div>
			</div>
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="http://localhost/log/assets/plugins/respond.min.js"></script>
		<script src="http://localhost/log/assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<!--<![endif]-->
		<script src="http://localhost/log/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="http://localhost/log/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="http://localhost/log/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
		<script src="http://localhost/log/assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="http://localhost/log/assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="http://localhost/log/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="http://localhost/log/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="http://localhost/log/assets/plugins/less/less-1.5.0.min.js"></script>
		<script src="http://localhost/log/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="http://localhost/log/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="http://localhost/log/assets/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="http://localhost/log/assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="http://localhost/log/assets/plugins/autosize/jquery.autosize.min.js"></script>
		<script src="http://localhost/log/assets/plugins/select2/select2.min.js"></script>
		<script src="http://localhost/log/assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
		<script src="http://localhost/log/assets/plugins/jquery-maskmoney/jquery.maskMoney.js"></script>
		<script src="http://localhost/log/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="http://localhost/log/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
		<script src="http://localhost/log/assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
		<script src="http://localhost/log/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="http://localhost/log/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="http://localhost/log/assets/plugins/bootstrap-colorpicker/js/commits.js"></script>
		<script src="http://localhost/log/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script>
		<script src="http://localhost/log/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="http://localhost/log/assets/plugins/summernote/build/summernote.min.js"></script>
		<script src="http://localhost/log/assets/plugins/ckeditor/ckeditor.js"></script>
		<script src="http://localhost/log/assets/plugins/ckeditor/adapters/jquery.js"></script>
		<script src="http://localhost/log/assets/js/form-elements.js"></script>

		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script type="text/javascript" src="http://localhost/log/assets/plugins/select2/select2.min.js"></script>
		<script type="text/javascript" src="http://localhost/log/assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="http://localhost/log/assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>
		<script src="http://localhost/log/assets/js/table-data.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
				TableData.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>
