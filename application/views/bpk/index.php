<div class="page-header">
  <h4>BPK <small>halaman BPK</small></h4>
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
    <a class="btn btn-primary btn-sm" href="<?php echo site_url('bpk/add'); ?>"><i class="fa fa-plus"></i> Tambah item</a><br><br>
    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
      <thead>
        <tr>
          <th>Tanggal</th>
          <th>No Bpk</th>
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
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i= 0;
        foreach($bpk as $b){

          $data[$i]['r'] = $this->Rekap_pembayaran_log_model->get_total_rekap_pembayaran_log($b['no_bpk']);

          ?>
        <tr>
          <td><?php echo $this->Bpk_model->IndonesiaTgl($b['tanggal']); ?></td>
          <td><?php echo $b['no_bpk']; ?></td>
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
          <td>
            <a href="<?php echo site_url('bpk/edit/'.$b['no_bpk']); ?>" class="btn btn-info btn-sm"><span class="fa fa-pencil"></span></a>
            <a href="<?php echo site_url('bpk/remove/'.$b['no_bpk']); ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
            <a href="<?php echo site_url('bpk/pilih/'.$b['no_bpk']); ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-eye-open"></span></a>
            <a href="<?php echo site_url('bpk/cetak/'.$b['no_bpk']); ?>" class="btn btn-warning btn-sm"><span class="fa fa-print"></span></a>
          </td>
        </tr>
        <?php  $i++; } ?>
      </tbody>
    </table>
  </div>
</div>
  <!-- end: DYNAMIC TABLE PANEL -->
