<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
            	<div class="box-tools">
                <h3>BPK :  <?php echo $this->session->userdata('no_bpk'); ?></h3>
                </div>
            </div>
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
						<th>Grade</th>
						<th>A Pc</th>
						<th>A M3</th>
						<th>B Pc</th>
						<th>B M3</th>
						<th>Satum Pc</th>
						<th>Satum M3</th>
						<th>Afkir Pc</th>
						<th>Afkir M3</th>
                    </tr>
                    <?php foreach($rekap_pembayaran_log as $r){ ?>
                    <tr>
						<td><?php echo $r['grade']; ?></td>
						<td><?php echo $r['a_pc']; ?></td>
						<td><?php echo $r['a_m3']; ?></td>
						<td><?php echo $r['b_pc']; ?></td>
						<td><?php echo $r['b_m3']; ?></td>
						<td><?php echo $r['satum_pc']; ?></td>
						<td><?php echo $r['satum_m3']; ?></td>
						<td><?php echo $r['afkir_pc']; ?></td>
						<td><?php echo $r['afkir_m3']; ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
