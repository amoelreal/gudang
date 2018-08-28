<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Cek Log Add</h3>
            </div>
            <?php echo form_open('cek_log/add'); ?>
          	<div class="box-body">
          		<?php echo validation_errors(); ?>
            	<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="grade" class="control-label">Grade</label>
						<div class="form-group">
							<input type="text" name="grade" value="<?php echo $this->input->post('grade'); ?>" class="form-control" id="grade" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="a" class="control-label">A</label>
						<div class="form-group">
							<input type="text" name="a" value="<?php echo $this->input->post('a'); ?>" class="form-control" id="a" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="b" class="control-label">B</label>
						<div class="form-group">
							<input type="text" name="b" value="<?php echo $this->input->post('b'); ?>" class="form-control" id="b" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="satum" class="control-label">Satum</label>
						<div class="form-group">
							<input type="text" name="satum" value="<?php echo $this->input->post('satum'); ?>" class="form-control" id="satum" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="afkir" class="control-label">Afkir</label>
						<div class="form-group">
							<input type="text" name="afkir" value="<?php echo $this->input->post('afkir'); ?>" class="form-control" id="afkir" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="bpk_no_bpk" class="control-label">Bpk No Bpk</label>
						<div class="form-group">
							<input type="text" name="bpk_no_bpk" value="<?php echo $this->input->post('bpk_no_bpk'); ?>" class="form-control" id="bpk_no_bpk" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>