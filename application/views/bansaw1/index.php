<div class="page-header">
  <h4>MONITORING LOG <small>bansaw 1</small></h4>
</div>
<?php
$no_bpk = $this->session->userdata('no_bpk');
if($no_bpk == ""){}
  else{
?>
<div class="row">
  <div class="col-md-4">

    <!-- start: CONDENSED TABLE PANEL -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-external-link-square"></i>
        Log BANSAW 1
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

        <?php echo form_open('excel_bansaw1/upload','role="form" class="form-horizontal" enctype="multipart/form-data"'); ?>
          <?php //echo validation_errors(); ?>
          <div class="form-group">
            <div class="col-sm-9">
              <input type="file" name="file" class="form-control" />
            </div>
            <div class="col-sm-2">
              <button type="submit" name="Upload file" class="btn btn-warning ">Import</button>
            </div>
          </div>
          <?php echo form_close(); ?>


      </div>
    </div>
    <!-- end: CONDENSED TABLE PANEL -->
    <a class="btn btn-primary btn-sm" href="<?php echo site_url('bansaw1/add/'.$this->session->userdata('no_bpk')); ?>"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah item</a>
    <a class="btn btn-danger btn-sm" href="<?php echo site_url('bansaw1/removeall/'.$this->session->userdata('no_bpk')); ?>"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Delete all</a><br><br>

    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
      <thead>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>D</th>
          <th>Ket</th>
          <th>Act</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($bansaw1 as $b){ ?>
        <tr>
          <td><?php echo $b['no']; ?></td>
          <td><?php echo $this->Bpk_model->IndonesiaTgl($b['tanggal']); ?></td>
          <td><?php echo $b['diameter']; ?></td>
          <td><?php echo $b['grade_grade']; ?></td>
          <td>
                <a href="<?php echo site_url('bansaw1/edit/'.$b['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span></a>
                <a href="<?php echo site_url('bansaw1/remove/'.$b['id']); ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <div class="col-md-4">
    <!-- start: CONDENSED TABLE PANEL -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-external-link-square"></i>
        Cek Log
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
        <table class="table table-bordered table-hover" id="sample-table-3">
          <thead>
            <tr>
              <th>Grade</th>
              <th>A</th>
              <th>B</th>
              <th>C</th>
              <th>1M</th>
              <th>AF</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($cek_log as $c){ ?>
            <tr>
              <td><?php echo $c['grade']; ?></td>
              <td><?php echo $c['a']; ?></td>
              <td><?php echo $c['b']; ?></td>
              <td><?php echo $c['c']; ?></td>
              <td><?php echo $c['satum']; ?></td>
              <td><?php echo $c['afkir']; ?></td>
            </tr>
            <?php } ?>
            <tr>
              <td>Total</td>
              <td><?php echo $total_cek_log['a']; ?></td>
              <td><?php echo $total_cek_log['b']; ?></td>
              <td><?php echo $total_cek_log['c']; ?></td>
              <td><?php echo $total_cek_log['satum']; ?></td>
              <td><?php echo $total_cek_log['afkir']; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- end: CONDENSED TABLE PANEL -->
  </div>

  <div class="col-md-4">
    <!-- start: CONDENSED TABLE PANEL -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-external-link-square"></i>
        Selisih Log &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('cek_log/cetak_selisih'); ?>" class="btn btn-warning btn-xs"><span class="fa fa-print"></span>&nbsp;cetak</a>
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
        <table class="table table-bordered table-hover" id="sample-table-3">
          <thead>
            <tr>
              <th>Grade</th>
              <th>A</th>
              <th>B</th>
              <th>C</th>
              <th>1M</th>
              <th>AF</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($selisih_stok as $s){ ?>
            <tr>
              <td><?php echo $s['grade']; ?></td>
              <td><?php echo $s['a']; ?></td>
              <td><?php echo $s['b']; ?></td>
              <td><?php echo $s['c']; ?></td>
              <td><?php echo $s['satum']; ?></td>
              <td><?php echo $s['afkir']; ?></td>
            </tr>
            <?php } ?>
            <tr>
              <td>Total</td>
              <td><?php echo $total_selisih_stok['a']; ?></td>
              <td><?php echo $total_selisih_stok['b']; ?></td>
              <td><?php echo $total_selisih_stok['c']; ?></td>
              <td><?php echo $total_selisih_stok['satum']; ?></td>
              <td><?php echo $total_selisih_stok['afkir']; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- end: CONDENSED TABLE PANEL -->
  </div>
  </div>
<?php } ?>
