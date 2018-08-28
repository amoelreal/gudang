<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=SelisihStok.xls");
?>
<h4><b>Selisih Stok</b></h4>
<b>NO BPK : <?php echo $this->session->userdata('no_bpk'); ?> | Total : <?php echo $total_selisih_stok['a']+$total_selisih_stok['b']+$total_selisih_stok['c']+$total_selisih_stok['satum']+$total_selisih_stok['afkir']; ?></b>
    <table border="1" cellpadding='7'>
      <thead>
        <tr>
          <th>Grd</th>
          <th>A</th>
          <th>B</th>
          <th>C</th>
          <th>1M</th>
          <th>AF</th>
        </tr>
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
    </table>

    <?php //redirect('rekap_per_bpk/index'); ?>
