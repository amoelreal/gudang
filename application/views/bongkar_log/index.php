<div class="page-header">
  <h4>BONGKAR LOG <small>halaman detail Bongkar Log</small></h4>
</div>

<?php
$no_bpk = $this->session->userdata('no_bpk');
if($no_bpk == ""){}
  else{
?>
<div class="row">
  <div class="col-md-12">
    <!-- start: CONDENSED TABLE PANEL -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-external-link-square"></i>
        BONGKAR LOG
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
            <th>Grd</th>
            <th>A Rt</th>
            <th>A B1</th>
            <th>A B2</th>
            <th>A B3</th>
            <th>A M3</th>
            <th>B Rt</th>
            <th>B B1</th>
            <th>B B2</th>
            <th>B B3</th>
            <th>B M3</th>
            <th>C Rt</th>
            <th>C B1</th>
            <th>C B2</th>
            <th>C B3</th>
            <th>C M3</th>
            <th>1M Rt</th>
            <th>1M B1</th>
            <th>1M B2</th>
            <th>1M B3</th>
            <th>1M M3</th>
            <th>Af Rt</th>
            <th>Af B1</th>
            <th>Af B2</th>
            <th>Af B3</th>
            <th>Af M3</th>
          </tr>
        </thead>
        <tbody>
          <?php

          foreach($bongkar_log as $b){ ?>
          <tr>
            <td><?php echo $b['grade']; ?></td>
            <td><?php echo $b['a_rot']; ?></td>
            <td><?php echo $b['a_band1']; ?></td>
            <td><?php echo $b['a_band2']; ?></td>
            <td><?php echo $b['a_band3']; ?></td>
            <td><?php echo $this->Rekap_total->cetak_angka($b['a_m3']); ?></td>
            <td><?php echo $b['b_rot']; ?></td>
            <td><?php echo $b['b_band1']; ?></td>
            <td><?php echo $b['b_band2']; ?></td>
            <td><?php echo $b['b_band3']; ?></td>
            <td><?php echo $this->Rekap_total->cetak_angka($b['b_m3']); ?></td>
            <td><?php echo $b['c_rot']; ?></td>
            <td><?php echo $b['c_band1']; ?></td>
            <td><?php echo $b['c_band2']; ?></td>
            <td><?php echo $b['c_band3']; ?></td>
            <td><?php echo $this->Rekap_total->cetak_angka($b['c_m3']); ?></td>
            <td><?php echo $b['satum_rot']; ?></td>
            <td><?php echo $b['satum_band1']; ?></td>
            <td><?php echo $b['satum_band2']; ?></td>
            <td><?php echo $b['satum_band3']; ?></td>
            <td><?php echo $this->Rekap_total->cetak_angka($b['satum_m3']); ?></td>
            <td><?php echo $b['afkir_rot']; ?></td>
            <td><?php echo $b['afkir_band1']; ?></td>
            <td><?php echo $b['afkir_band2']; ?></td>
            <td><?php echo $b['afkir_band3']; ?></td>
            <td><?php echo $this->Rekap_total->cetak_angka($b['afkir_m3']); ?></td>
          </tr>
          <?php } ?>
          <tr>
            <td>Total</td>
            <td><?php echo $bongkar_log_total['j_a_rot']; ?></td>
            <td><?php echo $bongkar_log_total['j_a_band1']; ?></td>
            <td><?php echo $bongkar_log_total['j_a_band2']; ?></td>
            <td><?php echo $bongkar_log_total['j_a_band3']; ?></td>
            <td><?php echo $this->Rekap_total->cetak_angka($bongkar_log_total['j_a_m3']); ?></td>

            <td><?php echo $bongkar_log_total['j_b_rot']; ?></td>
            <td><?php echo $bongkar_log_total['j_b_band1']; ?></td>
            <td><?php echo $bongkar_log_total['j_b_band2']; ?></td>
            <td><?php echo $bongkar_log_total['j_b_band3']; ?></td>
            <td><?php echo $this->Rekap_total->cetak_angka($bongkar_log_total['j_b_m3']); ?></td>

            <td><?php echo $bongkar_log_total['j_c_rot']; ?></td>
            <td><?php echo $bongkar_log_total['j_c_band1']; ?></td>
            <td><?php echo $bongkar_log_total['j_c_band2']; ?></td>
            <td><?php echo $bongkar_log_total['j_c_band3']; ?></td>
            <td><?php echo $this->Rekap_total->cetak_angka($bongkar_log_total['j_c_m3']); ?></td>

            <td><?php echo $bongkar_log_total['j_satum_rot']; ?></td>
            <td><?php echo $bongkar_log_total['j_satum_band1']; ?></td>
            <td><?php echo $bongkar_log_total['j_satum_band2']; ?></td>
            <td><?php echo $bongkar_log_total['j_satum_band3']; ?></td>
            <td><?php echo $this->Rekap_total->cetak_angka($bongkar_log_total['j_satum_m3']); ?></td>

            <td><?php echo $bongkar_log_total['j_afkir_rot']; ?></td>
            <td><?php echo $bongkar_log_total['j_afkir_band1']; ?></td>
            <td><?php echo $bongkar_log_total['j_afkir_band2']; ?></td>
            <td><?php echo $bongkar_log_total['j_afkir_band3']; ?></td>
            <td><?php echo $this->Rekap_total->cetak_angka($bongkar_log_total['j_afkir_m3']); ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- end: BORDERED TABLE PANEL -->
</div>
</div>
<?php } ?>
