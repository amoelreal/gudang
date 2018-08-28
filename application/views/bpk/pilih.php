<div class="page-header">
  <h4>BPK <small>halaman detail bpk</small></h4>
</div>
<div class="col-md-7">
  <a href="<?php echo site_url('bpk/edit/'.$bpk['no_bpk']); ?>" class="btn btn-info btn-sm"><span class="fa fa-pencil"></span></a>
  <a href="<?php echo site_url('bpk/remove/'.$bpk['no_bpk']); ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
  <a href="<?php echo site_url('bpk/cetak/'.$bpk['no_bpk']); ?>" class="btn btn-warning btn-sm"><span class="fa fa-print"></span></a>
  <br>
  <br>
<table id="user" class="table table-bordered table-striped" style="clear: both">
	<tbody>
		<tr>
			<td class="column-left">NO BPK</td>
			<td class="column-right"><?php echo $bpk['no_bpk']; ?></td>
		</tr>
    <tr>
			<td>Tanggal</td>
			<td><?php echo $this->Bpk_model->IndonesiaTgl($bpk['tanggal']); ?></td>
		</tr>
    <tr>
			<td>Nama Supplier</td>
			<td><?php echo $bpk['nama_supplier'] ?></td>
		</tr>
    <tr>
			<td>Nama Sopir</td>
			<td><?php echo $bpk['nama_sopir'] ?></td>
		</tr>
    <tr>
			<td>Dokumen</td>
			<td><?php echo $bpk['dokumen'] ?></td>
		</tr>
    <tr>
			<td>Jumlah Pcs</td>
			<td><?php echo $total_log['pcs'] ?></td>
		</tr>
    <tr>
			<td>Volume M3</td>
			<td><?php echo $total_log['total'] ?></td>
		</tr>
    <tr>
			<td>No Hp Supplier</td>
			<td><?php echo $bpk['no_hp'] ?></td>
		</tr>
    <tr>
			<td>No Hp Sopir</td>
			<td><?php echo $bpk['no_hp_sopir'] ?></td>
		</tr>
    <tr>
			<td>Jam Masuk</td>
			<td><?php echo $bpk['jam_masuk'] ?></td>
		</tr>
    <tr>
			<td>No Polisi</td>
			<td><?php echo $bpk['no_polisi'] ?></td>
		</tr>
    <tr>
			<td>Asal</td>
			<td><?php echo $bpk['asal'] ?></td>
		</tr>
    <tr>
			<td>Jenis Kayu</td>
			<td><?php echo $bpk['jenis_kayu'] ?></td>
		</tr>
	</tbody>
</table>
</div>
