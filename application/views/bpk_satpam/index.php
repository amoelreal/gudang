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
		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
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

						<li class="dropdown current-user">
							<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
								<img src="http://localhost/log/assets/images/poliwangi.PNG" width="30px" class="circle-img" alt="">
								<span class="username"><?php $user = $this->session->userdata('nama'); echo $user; ?></span>
								<i class="clip-chevron-down"></i>
							</a>
							<ul class="dropdown-menu">
								<!-- <li>
									<a href="pages_calendar.html">
										<i class="clip-calendar"></i>
										&nbsp;My Calendar
									</a>
								<li>
									<a href="pages_messages.html">
										<i class="clip-bubble-4"></i>
										&nbsp;My Messages (3)
									</a>
								</li> -->
								<!-- <li>
									<a href="utility_lock_screen.html"><i class="clip-locked"></i>
										&nbsp;Lock Screen </a>
								</li> -->
								<li>
									<a href="auth/logout">
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

          <?php
          $user = $this->session->userdata('jabatan');
          if ($user == "") {
              redirect('auth','refresh');
          } elseif ($user == "Admin") {
              redirect('bpk','refresh');
          }
           ?>
          <!-- start: MAIN NAVIGATION MENU -->
          <ul class="main-navigation-menu">
						<li class=<?php if($id == "bpk_satpam"){ echo "active";} ?>>
              <a href="<?php echo site_url('bpk_satpam');?>"><i class="clip-stack"></i>
                <span class="title"> BPK </span><span class="selected"></span>
              </a>
            </li>
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
							<!-- start: STYLE SELECTOR BOX -->
							<!-- <div id="style_selector" class="hidden-xs">
								<div id="style_selector_container" style="display:block">
									<div class="style-main-title">
										Style Selector
									</div>
									<div class="box-title">
										Choose Your Layout Style
									</div>
									<div class="input-box">
										<div class="input">
											<select name="layout">
												<option value="default">Wide</option><option value="boxed">Boxed</option>
											</select>
										</div>
									</div>
									<div class="box-title">
										Choose Your Header Style
									</div>
									<div class="input-box">
										<div class="input">
											<select name="header">
												<option value="fixed">Fixed</option><option value="default">Default</option>
											</select>
										</div>
									</div>
									<div class="box-title">
										Choose Your Footer Style
									</div>
									<div class="input-box">
										<div class="input">
											<select name="footer">
												<option value="default">Default</option><option value="fixed">Fixed</option>
											</select>
										</div>
									</div>
									<div class="box-title">
										Backgrounds for Boxed Version
									</div>
									<div class="images boxed-patterns">
										<a id="bg_style_1" href="#"><img alt="" src="http://localhost/log/assets/images/bg.png"></a>
										<a id="bg_style_2" href="#"><img alt="" src="http://localhost/log/assets/images/bg_2.png"></a>
										<a id="bg_style_3" href="#"><img alt="" src="http://localhost/log/assets/images/bg_3.png"></a>
										<a id="bg_style_4" href="#"><img alt="" src="http://localhost/log/assets/images/bg_4.png"></a>
										<a id="bg_style_5" href="#"><img alt="" src="http://localhost/log/assets/images/bg_5.png"></a>
									</div>
									<div class="box-title">
										5 Predefined Color Schemes
									</div>
									<div class="images icons-color">
										<a id="light" href="#"><img class="active" alt="" src="http://localhost/log/assets/images/lightgrey.png"></a>
										<a id="dark" href="#"><img alt="" src="http://localhost/log/assets/images/darkgrey.png"></a>
										<a id="black_and_white" href="#"><img alt="" src="http://localhost/log/assets/images/blackandwhite.png"></a>
										<a id="navy" href="#"><img alt="" src="http://localhost/log/assets/images/navy.png"></a>
										<a id="green" href="#"><img alt="" src="http://localhost/log/assets/images/green.png"></a>
									</div>
									<div class="box-title">
										Style it with LESS
									</div>
									<div class="images">
										<div class="form-group">
											<label>
												Basic
											</label>
											<input type="text" value="#ffffff" class="color-base">
											<div class="dropdown">
												<a class="add-on dropdown-toggle" data-toggle="dropdown"><i style="background-color: #ffffff"></i></a>
												<ul class="dropdown-menu pull-right">
													<li>
														<div class="colorpalette"></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="form-group">
											<label>
												Text
											</label>
											<input type="text" value="#555555" class="color-text">
											<div class="dropdown">
												<a class="add-on dropdown-toggle" data-toggle="dropdown"><i style="background-color: #555555"></i></a>
												<ul class="dropdown-menu pull-right">
													<li>
														<div class="colorpalette"></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="form-group">
											<label>
												Elements
											</label>
											<input type="text" value="#007AFF" class="color-badge">
											<div class="dropdown">
												<a class="add-on dropdown-toggle" data-toggle="dropdown"><i style="background-color: #007AFF"></i></a>
												<ul class="dropdown-menu pull-right">
													<li>
														<div class="colorpalette"></div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div style="height:25px;line-height:25px; text-align: center">
										<a class="clear_style" href="#">
											Clear Styles
										</a>
										<a class="save_style" href="#">
											Save Styles
										</a>
									</div>
								</div>
								<div class="style-toggle open"></div>
							</div> -->
							<!-- end: STYLE SELECTOR BOX -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->

<!-- content dinamsis -->

        <div class="row">
          <div style="margin:20px;">
            <div class="page-header">
              <h4>BPK <small>halaman detail bpk</small></h4>
            </div>

            <!-- start: DYNAMIC TABLE PANEL -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                Data BPK
                <div class="panel-tools">
                  <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                  </a>
                  <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                    <i class="fa fa-wrench"></i>
                  </a>
                  <a class="btn btn-xs btn-link panel-refresh" href="#">
                    <i class="fa fa-refresh"></i>
                  </a>
                  <a class="btn btn-xs btn-link panel-expand" href="#">
                    <i class="fa fa-resize-full"></i>
                  </a>
                  <a class="btn btn-xs btn-link panel-close" href="#">
                    <i class="fa fa-times"></i>
                  </a>
                </div>
              </div>
              <div class="panel-body">
                <a class="btn btn-primary btn-sm" href="<?php echo site_url('bpk_satpam/add'); ?>"><i class="fa fa-plus"></i>Tambah item</a><br><br>
                <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                  <thead>
                    <tr>
                      <th>No Bpk</th>
                      <th>Tanggal</th>
                      <th>Supplier</th>
                      <!-- <th>Nama Sopir</th> -->
                      <!-- <th>Dokumen</th> -->
                      <th>J Pcs</th>
                      <th>V M3</th>
                      <th>No Hp Sopir</th>
                      <!-- <th>Jam Masuk</th> -->
                      <th>No Polisi</th>
                      <th>Asal</th>
                      <th>Jenis</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i= 0;
                    foreach($bpk as $b){

                      $data[$i]['r'] = $this->Rekap_pembayaran_log_model->get_total_rekap_pembayaran_log($b['no_bpk']);

                      ?>
                    <tr>
                      <td><?php echo $b['no_bpk']; ?></td>
                      <td><?php echo $this->Bpk_model->IndonesiaTgl($b['tanggal']); ?></td>
                      <td><?php echo $b['nama_supplier']; ?></td>
                      <!-- <td><?php //echo $b['nama_sopir']; ?></td> -->
                      <!-- <td><?php //echo $b['dokumen']; ?></td> -->
                      <td><?php echo $data[$i]['r']['j_a_pc']+$data[$i]['r']['j_b_pc']+$data[$i]['r']['j_c_pc']+$data[$i]['r']['j_afkir_pc']+$data[$i]['r']['j_satum_pc']; ?></td>
                      <td><?php echo $data[$i]['r']['j_a_m3']+$data[$i]['r']['j_b_m3']+$data[$i]['r']['j_c_m3']+$data[$i]['r']['j_afkir_m3']+$data[$i]['r']['j_satum_m3']; ?></td>
                      <td><?php echo $b['no_hp_sopir']; ?></td>
                      <!-- <td><?php //echo $b['jam_masuk']; ?></td> -->
                      <td><?php echo $b['no_polisi']; ?></td>
                      <td><?php echo $b['asal']; ?></td>
                      <td><?php echo $b['jenis_kayu']; ?></td>
                    </tr>
                    <?php  $i++; } ?>
                  </tbody>
                </table>
              </div>
            </div>
              <!-- end: DYNAMIC TABLE PANEL -->
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
