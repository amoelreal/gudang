<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Selisih Stok Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('selisih_stok/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Grade</th>
						<th>A</th>
						<th>B</th>
						<th>Satum</th>
						<th>Afkir</th>
						<th>Bpk No Bpk</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($selisih_stok as $s){ ?>
                    <tr>
						<td><?php echo $s['id']; ?></td>
						<td><?php echo $s['grade']; ?></td>
						<td><?php echo $s['a']; ?></td>
						<td><?php echo $s['b']; ?></td>
						<td><?php echo $s['satum']; ?></td>
						<td><?php echo $s['afkir']; ?></td>
						<td><?php echo $s['bpk_no_bpk']; ?></td>
						<td>
                            <a href="<?php echo site_url('selisih_stok/edit/'.$s['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('selisih_stok/remove/'.$s['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
