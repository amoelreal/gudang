<div class="page-header">
  <h4>PERSEDIAAN <small>stok akhir</small></h4>
</div>
<?php if (isset($gagal_cetak)) {
    echo "<div class='alert alert-danger'>".$gagal_cetak."</div>";
} ?>
<!-- start: DYNAMIC TABLE PANEL -->
<div class="panel panel-default">
  <div class="panel-heading">
    <i class="fa fa-external-link-square"></i>
    Data Stok Akhir
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
    <?php echo form_open('rekap_stok_akhir/cetak','role="form" class="form-horizontal"'); ?>
      <?php echo validation_errors(); ?>
      <div class="form-group">
        <label class="col-sm-1 control-label" for="form-field-1">
          Bulan
        </label>
        <div class="col-sm-2">
          <select class="form-control" name="bulan">
            <option value="1">Januari</option>
            <option value="2">Februari</option>
            <option value="3">Maret</option>
            <option value="4">April</option>
            <option value="5">Mei</option>
            <option value="6">Juni</option>
            <option value="7">Juli</option>
            <option value="8">Agustus</option>
            <option value="9">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
          </select>
        </div>
        <div class="col-sm-2">
          <select class="form-control" name="tahun">
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
          </select>
        </div>
        <div class="col-sm-2">
          <button type="submit" name="submit" class="btn btn-warning "><span class="fa fa-print"></span> Export excel</button>
        </div>
      </div>
      <?php echo form_close(); ?>

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
        foreach ($persediaan as $s) {
          $tanggal[] = $s['tanggal'];
          $no_bpk[] = $s['no_bpk'];
          $rencek[] = $s['rencek'];
          $a0[] = $s['a0'];
          $a1[] = $s['a1'];
          $a21[] = $s['a21'];
          $a22[] = $s['a22'];
          $a3[] = $s['a3'];
          $a4[] = $s['a4'];
          $b0[] = $s['b0'];
          $b1[] = $s['b1'];
          $b2[] = $s['b2'];
          $c0[] = $s['c0'];
          $c1[] = $s['c1'];
          $c2[] = $s['c2'];
          $satum[] = $s['1m'];
          $afkir[] = $s['afkir'];
          $total[] = $s['total'];
          $pcs[] = $s['pcs'];
        }

        foreach ($pemakaian as $p) {
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

        $jumlah1 = 0;
        $jumlah2 = 0;
        $jumlah3 = 0;
        $jumlah4 = 0;
        $jumlah5 = 0;
        $jumlah6 = 0;
        $jumlah7 = 0;
        $jumlah8 = 0;
        $jumlah9 = 0;
        $jumlah10 = 0;
        $jumlah11 = 0;
        $jumlah12 = 0;
        $jumlah13 = 0;
        $jumlah14 = 0;
        $jumlah15 = 0;
        $jumlah16 = 0;
        $jumlah17 = 0;

        for ($i=0; $i < $bpk ; $i++) {
        ?>

        <tr>
          <td><?php echo $this->Bpk_model->IndonesiaTgl($tanggal[$i]); ?></td>
          <td><?php echo $no_bpk[$i]; ?></td>
          <td><?php  $jumlah1 = $jumlah1 + $this->Rekap_total->format_angka($rencek[$i]-$rencek_p[$i]);
                     echo $this->Rekap_total->cetak_angka($jumlah1); ?></td>
          <td><?php  $jumlah2 = $jumlah2 + $this->Rekap_total->format_angka($a0[$i]-$a0_p[$i]);
                     echo $this->Rekap_total->cetak_angka($jumlah2); ?></td>
          <td><?php  $jumlah3 = $jumlah3 + $this->Rekap_total->format_angka($a1[$i]-$a1_p[$i]);
                     echo $this->Rekap_total->cetak_angka($jumlah3); ?></td>
          <td><?php  $jumlah4 = $jumlah4 + $this->Rekap_total->format_angka($a21[$i]-$a21_p[$i]);
                     echo $this->Rekap_total->cetak_angka($jumlah4); ?></td>
          <td><?php  $jumlah5 = $jumlah5 + $this->Rekap_total->format_angka($a22[$i]-$a22_p[$i]);
                     echo $this->Rekap_total->cetak_angka($jumlah5); ?></td>
          <td><?php  $jumlah6 = $jumlah6 + $this->Rekap_total->format_angka($a3[$i]-$a3_p[$i]);
                     echo $this->Rekap_total->cetak_angka($jumlah6); ?></td>
          <td><?php  $jumlah7 = $jumlah7 + $this->Rekap_total->format_angka($a4[$i]-$a4_p[$i]);
                     echo $this->Rekap_total->cetak_angka($jumlah7); ?></td>
          <td><?php  $jumlah8 = $jumlah8 + $this->Rekap_total->format_angka($b0[$i]-$b0_p[$i]);
                     echo $this->Rekap_total->cetak_angka($jumlah8); ?></td>
          <td><?php  $jumlah9 = $jumlah9 + $this->Rekap_total->format_angka($b1[$i]-$b1_p[$i]);
                     echo $this->Rekap_total->cetak_angka($jumlah9); ?></td>
          <td><?php  $jumlah10 = $jumlah10 + $this->Rekap_total->format_angka($b2[$i]-$b2_p[$i]);
                     echo $this->Rekap_total->cetak_angka($jumlah10); ?></td>
          <td><?php  $jumlah11 = $jumlah11 + $this->Rekap_total->format_angka($c0[$i]-$c0_p[$i]);
                     echo $this->Rekap_total->cetak_angka($jumlah11); ?></td>
          <td><?php  $jumlah12 = $jumlah12 + $this->Rekap_total->format_angka($c1[$i]-$c1_p[$i]);
                     echo $this->Rekap_total->cetak_angka($jumlah12); ?></td>
          <td><?php  $jumlah13 = $jumlah13 + $this->Rekap_total->format_angka($c2[$i]-$c2_p[$i]);
                     echo $this->Rekap_total->cetak_angka($jumlah13); ?></td>
          <td><?php  $jumlah14 = $jumlah14 + $this->Rekap_total->format_angka($satum[$i]-$satum_p[$i]);
                     echo $this->Rekap_total->cetak_angka($jumlah14); ?></td>
          <td><?php  $jumlah15 = $jumlah15 + $this->Rekap_total->format_angka($afkir[$i]-$afkir_p[$i]);
                     echo $this->Rekap_total->cetak_angka($jumlah15); ?></td>
          <td><?php  $jumlah16 = $jumlah16 + $this->Rekap_total->format_angka($total[$i]-$total_p[$i]);
                     echo $this->Rekap_total->cetak_angka($jumlah16); ?></td>
          <td><?php  $jumlah17 = $jumlah17 + $pcs[$i]-$pcs_p[$i];
                     echo $this->Rekap_total->format_harga($jumlah17); ?></td>
        </tr>
        <?php }

        foreach ($total_persediaan as $t) {
          $rencek = $t['rencek'];
          $a0 = $t['a0'];
          $a1 = $t['a1'];
          $a21 = $t['a21'];
          $a22 = $t['a22'];
          $a3 = $t['a3'];
          $a4 = $t['a4'];
          $b0 = $t['b0'];
          $b1 = $t['b1'];
          $b2 = $t['b2'];
          $c0 = $t['c0'];
          $c1 = $t['c1'];
          $c2 = $t['c2'];
          $satum = $t['1m'];
          $afkir = $t['afkir'];
          $total = $t['total'];
          $pcs = $t['pcs'];
        }

        foreach ($total_pemakaian as $tp) {
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
          <td><?php echo $this->Rekap_total->cetak_angka($rencek-$rencek_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($a0-$a0_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($a1-$a1_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($a21-$a21_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($a22-$a22_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($a3-$a3_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($a4-$a4_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($b0-$b0_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($b1-$b1_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($b2-$b2_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($c0-$c0_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($c1-$c1_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($c2-$c2_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($satum-$satum_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($afkir-$afkir_p); ?></td>
          <td><?php echo $this->Rekap_total->cetak_angka($total-$total_p); ?></td>
          <td><?php echo $this->Rekap_total->format_harga($pcs-$pcs_p); ?></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
  <!-- end: DYNAMIC TABLE PANEL -->
