<div class="row">
    <div class="col-md-6">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h4>Edit Grade</h4>
            </div>
			<?php echo form_open('grade/edit/'.$grade['grade']); ?>
			<div class="box-body">
        <div class="row clearfix">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <label for="grade" class="control-label">Grade</label>
            <div class="form-group">
              <input type="text" name="grade" value="<?php echo ($this->input->post('grade') ? $this->input->post('grade') : $grade['grade']); ?>" class="form-control" id="grade" />
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
