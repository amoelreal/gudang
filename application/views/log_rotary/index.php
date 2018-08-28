  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3>No BPK : <?php echo $this->session->userdata('no_bpk');  ?></h3>
            	<div class="box-tools">
                </div>
            </div>
            <div class="box-body no-padding">
                <table class="table table-striped">
                  <a href="<?php echo site_url('log_rotary/add/'.$this->session->userdata('no_bpk')); ?>" class="btn btn-primary btn-l glyphicon glyphicon-plus"></a><br><br>
                    <tr>
                      <th>Tanggal</th>
          						<th>No</th>
          						<th>D</th>
          						<th>Ket</th>
          						<th>Actions</th>
                    </tr>
                    <?php foreach($log_rotary as $l){ ?>
                    <tr>
                      <td><?php echo $this->Bpk_model->IndonesiaTgl($l['tanggal']); ?></td>
          						<td><?php echo $l['no']; ?></td>
          						<td><?php echo $l['diameter']; ?></td>
          						<td><?php echo $l['grade_grade']; ?></td>
          						<td>
                            <a href="<?php echo site_url('log_rotary/edit/'.$l['id']); ?>" class="btn btn-info btn-sm"><span class="fa fa-pencil"></span></a>
                            <a href="<?php echo site_url('log_rotary/remove/'.$l['id']); ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
