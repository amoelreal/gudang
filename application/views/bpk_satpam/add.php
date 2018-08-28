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
								<li>
									<a href="#">
										<i class="clip-user-2"></i>
										&nbsp;My Profile
									</a>
								</li>
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

						</div>
					</div>
					<!-- end: PAGE HEADER -->

<!-- content dinamsis -->

        <div class="row">
          <div style="margin:20px;">
            <!-- start: TEXT FIELDS PANEL -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                Tambah BPK
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
                <?php echo form_open('bpk_satpam/add','role="form" class="form-horizontal"'); ?>

                  <?php echo validation_errors(); ?>

                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                      No BPK
                    </label>
                    <div class="col-sm-9">
                      <input type="text" placeholder="No BPK" id="form-field-1" class="form-control" name="no_bpk" value="<?php echo $this->input->post('no_bpk'); ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">
                      Tanggal
                    </label>
                      <div class="col-sm-9">
                        <div class="input-group">
                          <input type="text" data-date-format="dd-mm-yyyy" data-date-viewmode="years" class="form-control date-picker" name="tanggal" value="<?php echo ($this->input->post('tanggal') ? $this->input->post('tanggal') : date("d-m-Y")); ?>" />
                          <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-2">
                      Nama Supplier
                    </label>
                    <div class="col-sm-9">
                      <input type="text" placeholder="Nama Supplier" id="form-field-2" class="form-control" name="nama_supplier" value="<?php echo $this->input->post('nama_supplier'); ?>" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-3">
                      Nama Sopir
                    </label>
                    <div class="col-sm-9">
                      <input type="text" placeholder="Nama Sopir" id="form-field-3" class="form-control" name="nama_sopir" value="<?php echo $this->input->post('nama_sopir'); ?>" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-4">
                      Dokumen
                    </label>
                    <div class="col-sm-9">
                      <input type="text" placeholder="Dokumen" id="form-field-4" class="form-control" name="dokumen" value="<?php echo $this->input->post('dokumen'); ?>" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-22">
                      Asal
                    </label>
                    <div class="col-sm-9">
                    <textarea placeholder="Asal" id="form-field-22" class="form-control" name="asal"><?php echo $this->input->post('asal'); ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-5">
                      Jumlah Batang Pcs
                    </label>
                    <div class="col-sm-9">
                      <input type="number" placeholder="Jumlah batang pcs" id="form-field-5" class="form-control" name="jumlah_batang_pcs" value="<?php echo $this->input->post('jumlah_batang_pcs'); ?>" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-7">
                      Volume
                    </label>
                    <div class="col-sm-9">
                      <input type="number" placeholder="Volume kubikasi" id="form-field-7" class="form-control" name="volume_m3" value="<?php echo $this->input->post('volume_m3'); ?>" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-8">
                      No HP Supplier
                    </label>
                    <div class="col-sm-9">
                      <input type="number" placeholder="No HP Supplier" id="form-field-8" class="form-control" name="no_hp" value="<?php echo $this->input->post('no_hp'); ?>" class="form-control" id="no_hp" />
                    </div>
                  </div>
									<div class="form-group">
						        <label class="col-sm-2 control-label" for="form-field-8">
						          No HP Sopir
						        </label>
						        <div class="col-sm-9">
						          <input type="number" placeholder="No HP Sopir" id="form-field-8" class="form-control" name="no_hp_sopir" value="<?php echo $this->input->post('no_hp_sopir'); ?>" class="form-control" id="no_hp" />
						        </div>
						      </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-9">
                      Jam Masuk
                    </label>
                    <div class="col-sm-9">
                      <div class="input-group input-append bootstrap-timepicker">
                        <input type="text" class="form-control time-picker" value="<?php echo ($this->input->post('jam_masuk') ? $this->input->post('jam_masuk') : date("h:ia")); ?>" name="jam_masuk" />
                        <span class="input-group-addon add-on"><i class="fa fa-clock-o" ></i></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-10">
                      No Polisi
                    </label>
                    <div class="col-sm-9">
                      <input type="text" placeholder="No Polisi" id="form-field-10" class="form-control" name="no_polisi" value="<?php echo $this->input->post('no_polisi'); ?>" />
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-4">
                      Jenis
                    </label>
                    <div class="col-sm-9">
                      <label class="radio-inline">
                        <input type="radio" class="square-green" value="log" name="jenis">
                        Log
                      </label>
                      <label class="radio-inline">
                        <input type="radio" class="square-green" value="balken" name="jenis">
                        Balken
                      </label>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-4">
                      Jenis Kayu
                    </label>
                    <div class="col-sm-9">
                      <label class="radio-inline">
                        <input type="radio" class="square-green" value="Sengon" name="jenis_kayu">
                        Sengon
                      </label>
                      <label class="radio-inline">
                        <input type="radio" class="square-green" value="Non Sengon" name="jenis_kayu">
                        Non Sengon
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-2 control-label">
                      <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
                    </div>
                  </div>
                  <?php echo form_close(); ?>
                </div>
            </div>
            <!-- end: TEXT FIELDS PANEL -->
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
