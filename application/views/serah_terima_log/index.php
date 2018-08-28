<div class="page-header">
  <h4>PENERIMAAN LOG <small>halaman detail Penerimaan Log</small></h4>
</div>

<div class="row">
  <?php $no_bpk = $this->session->userdata('no_bpk');
  if($no_bpk == ""){}
    else{
  ?>
  <div class="col-md-4">
    <!-- start: CONDENSED TABLE PANEL -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-external-link-square"></i>
        Penerimaan Log
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
        <?php echo form_open('excel/upload','role="form" class="form-horizontal" enctype="multipart/form-data"'); ?>
          <?php //echo validation_errors(); ?>
          <div class="form-group">
            <div class="col-sm-9">
              <input type="file" name="file" class="form-control" />
            </div>
            <div class="col-sm-2">
              <button type="submit" name="Upload file" class="btn btn-warning btn-sm">Import</button>
            </div>
          </div>
          <?php echo form_close(); ?>


          <?php
          echo form_open('bpk/tambah_grader/'.$this->session->userdata('no_bpk') ,'role="form" class="form-horizontal"'); ?>
            <div class="form-group">
              <div class="col-sm-8">
                <input type="text" value="<?php echo ($this->input->post('grader') ? $this->input->post('grader') : $bpk['grader']); ?>" name="grader" class="form-control" placeholder="Masukkan nama grader"/>
              </div>
              <div class="col-sm-2 col-sm-offset-1">
                <button type="submit" name="update" class="btn btn-primary btn-sm">Simpan</button>
              </div>
            </div>
            <?php echo form_close(); ?>
      </div>
    </div>
    <!-- end: CONDENSED TABLE PANEL -->
    <a class="btn btn-primary" href="<?php echo site_url('serah_terima_log/add/'.$this->session->userdata('no_bpk')); ?>"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah item</a>&nbsp;&nbsp;
    <a class="btn btn-warning" href="<?php echo site_url('Cetak_datalog/cetak_data_log/'.$this->session->userdata('no_bpk')); ?>"><i class="fa fa-print"></i>&nbsp;&nbsp;CETAK</a><br><br>
    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
      <?php ?>
      <thead>
        <tr>
          <th>No</th>
          <th>D</th>
          <th>Ket</th>
          <th>Act</th>
        </tr>
      </thead>
      <tbody>
      </tr>
      <?php foreach($serah_terima_log as $s){ ?>
      <tr>
          <td><?php echo $s['no_log']; ?></td>
          <td><?php echo $s['diameter']; ?></td>
          <td><?php echo $s['grade_grade']; ?></td>
          <td>
              <a href="<?php echo site_url('serah_terima_log/edit/'.$s['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span></a>
              <a href="<?php echo site_url('serah_terima_log/remove/'.$s['id']); ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>
          </td>
      </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
  <div class="col-md-8">
    <!-- start: BORDERED TABLE PANEL -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-external-link-square"></i>
        Rekap Log
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
        <a href="<?php echo site_url('serah_terima_log/cetak_rekap_log/'.$this->session->userdata('no_bpk')); ?>" class="btn btn-warning "><span class="fa fa-print"></span>&nbsp;&nbsp;CETAK</a><br><br>
        <table class="table table-bordered table-hover" id="sample-table-4">
          <thead>
            <tr>
              <th>Grade</th>
  						<th>A Pc</th>
  						<th>A M3</th>
  						<th>B Pc</th>
  						<th>B M3</th>
              <th>C Pc</th>
  						<th>C M3</th>
  						<th>1M Pc</th>
  						<th>1M M3</th>
  						<th>Afkir Pc</th>
              <th>Afkir M3</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($rekap_pembayaran_log as $r){ ?>
            <tr>
              <td><?php echo $r['grade']; ?></td>
              <td><?php echo $r['a_pc']; ?></td>
              <td><?php echo $this->Rekap_total->cetak_angka($r['a_m3']); ?></td>
              <td><?php echo $r['b_pc']; ?></td>
              <td><?php echo $this->Rekap_total->cetak_angka($r['b_m3']); ?></td>
              <td><?php echo $r['c_pc']; ?></td>
              <td><?php echo $this->Rekap_total->cetak_angka($r['c_m3']); ?></td>
              <td><?php echo $r['satum_pc']; ?></td>
              <td><?php echo $this->Rekap_total->cetak_angka($r['satum_m3']); ?></td>
              <td><?php echo $r['afkir_pc']; ?></td>
              <td><?php echo $this->Rekap_total->cetak_angka($r['afkir_m3']); ?></td>
            </tr>
            <?php } ?>
            <tr>
              <td>Total</td>
              <td><?php echo $rekap_total_log['j_a_pc']; ?></td>
              <td><?php echo $this->Rekap_total->cetak_angka($rekap_total_log['j_a_m3']); ?></td>
              <td><?php echo $rekap_total_log['j_b_pc']; ?></td>
              <td><?php echo $this->Rekap_total->cetak_angka($rekap_total_log['j_b_m3']); ?></td>
              <td><?php echo $rekap_total_log['j_c_pc']; ?></td>
              <td><?php echo $this->Rekap_total->cetak_angka($rekap_total_log['j_c_m3']); ?></td>
              <td><?php echo $rekap_total_log['j_satum_pc']; ?></td>
              <td><?php echo $this->Rekap_total->cetak_angka($rekap_total_log['j_satum_m3']); ?></td>
              <td><?php echo $rekap_total_log['j_afkir_pc']; ?></td>
              <td><?php echo $this->Rekap_total->cetak_angka($rekap_total_log['j_afkir_m3']); ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- end: BORDERED TABLE PANEL -->
  </div>
  <?php } ?>
</div>
<!-- end: PAGE CONTENT-->
