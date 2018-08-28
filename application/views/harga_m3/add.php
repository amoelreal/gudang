<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Harga M3 Add</h3>
            </div>
            <?php echo form_open('harga_m3/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="grade_grade" class="control-label">Grade Grade</label>
						<div class="form-group">
							<input type="text" name="grade_grade" value="<?php echo $this->input->post('grade_grade'); ?>" class="form-control" id="grade_grade" />
							<span class="text-danger"><?php echo form_error('grade_grade');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="harga" class="control-label">Harga</label>
						<div class="form-group">
							<input type="text" name="harga" value="<?php echo $this->input->post('harga'); ?>" class="form-control" id="harga" />
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