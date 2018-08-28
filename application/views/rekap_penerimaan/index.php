<div class="page-header">
  <h4>PENERIMAAN <small>stok per bpk</small></h4>
</div>

<!-- start: DYNAMIC TABLE PANEL -->
<div class="panel panel-default">
  <div class="panel-heading">
    <i class="fa fa-external-link-square"></i>
    Data penerimaan per BPK
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
    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
      <thead>
        <tr>
          <th>TANGGAL</th>
          <th>NO BPK</th>
          <th>RENCEK</th>
          <th>A0</th>
          <th>A1</th>
          <th>A2.1</th>
          <th>A2.2</th>
          <th>A3</th>
          <th>A4</th>
          <th>B 09-14</th>
          <th>B 15-19</th>
          <th>B 20></th>
          <th>C 09-14</th>
          <th>C 15-19</th>
          <th>C 20></th>
          <th>1 M</th>
          <th>AF</th>
          <th>TOTAL</th>
          <th>PCS</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($persediaan as $p) {
          $tanggal_p[] = $p['tanggal'];
          $no_bpk_p[] = $p['no_bpk'];
          $rencek_p[] = $p['rencek'];
          $a0_p[] = $p['a0'];
          $a1_p[] = $p['a1'];
          $a21_p[] = $p['a21'];
          $a22_p[] = $p['a22'];
          $a3_p[] = $p['a3'];
          $a4_p[] = $p['a4'];
          $b0_p[] = $p['b0'];
          $b1_p[] = $p['b1'];
          $b2_p[] = $p['b2'];
          $c0_p[] = $p['c0'];
          $c1_p[] = $p['c1'];
          $c2_p[] = $p['c2'];
          $satum_p[] = $p['1m'];
          $afkir_p[] = $p['afkir'];
          $total_p[] = $p['total'];
          $pcs_p[] = $p['pcs'];
        }

        for ($i=0; $i < $bpk ; $i++) {
        ?>
        <tr>
          <td><?php echo $this->Bpk_model->IndonesiaTgl($tanggal_p[$i]); ?></td>
          <td><?php echo $no_bpk_p[$i]; ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($rencek_p[$i]); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($a0_p[$i]); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($a1_p[$i]); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($a21_p[$i]); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($a22_p[$i]); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($a3_p[$i]); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($a4_p[$i]); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($b0_p[$i]); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($b1_p[$i]); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($b2_p[$i]); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($c0_p[$i]); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($c1_p[$i]); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($c2_p[$i]); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($satum_p[$i]); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($afkir_p[$i]); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($total_p[$i]); ?></td>
          <td><?php echo $this->Rekap_total->format_harga($pcs_p[$i]); ?></td>
        </tr>
        <?php }

        foreach ($total_persediaan as $tp) {
          $rencek_p = $tp['rencek'];
          $a0_p = $tp['a0'];
          $a1_p = $tp['a1'];
          $a21_p = $tp['a21'];
          $a22_p = $tp['a22'];
          $a3_p = $tp['a3'];
          $a4_p = $tp['a4'];
          $b0_p = $tp['b0'];
          $b1_p = $tp['b1'];
          $b2_p = $tp['b2'];
          $c0_p = $tp['c0'];
          $c1_p = $tp['c1'];
          $c2_p = $tp['c2'];
          $satum_p = $tp['1m'];
          $afkir_p = $tp['afkir'];
          $total_p = $tp['total'];
          $pcs_p = $tp['pcs'];
        }
        ?>
        <tr>
          <td><?php echo date("d-m-Y"); ?></td>
          <td>TOTAL</td>
          <td><?php echo $this->Rekap_total->cetak_angka($rencek_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($a0_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($a1_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($a21_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($a22_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($a3_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($a4_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($b0_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($b1_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($b2_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($c0_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($c1_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($c2_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($satum_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($afkir_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($total_p); ?></td>
          <td><?php echo $this->Rekap_total->format_harga($pcs_p); ?></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
  <!-- end: DYNAMIC TABLE PANEL -->
