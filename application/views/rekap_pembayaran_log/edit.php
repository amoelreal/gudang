<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Rekap Pembayaran Log Edit</h3>
            </div>
			<?php echo form_open('rekap_pembayaran_log/edit/'.$rekap_pembayaran_log['id']); ?>
			<div class="box-body">
				<?php echo validation_errors(); ?>			
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="grade" class="control-label">Grade</label>
						<div class="form-group">
							<input type="text" name="grade" value="<?php echo ($this->input->post('grade') ? $this->input->post('grade') : $rekap_pembayaran_log['grade']); ?>" class="form-control" id="grade" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="a_pc" class="control-label">A Pc</label>
						<div class="form-group">
							<input type="text" name="a_pc" value="<?php echo ($this->input->post('a_pc') ? $this->input->post('a_pc') : $rekap_pembayaran_log['a_pc']); ?>" class="form-control" id="a_pc" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="a_m3" class="control-label">A M3</label>
						<div class="form-group">
							<input type="text" name="a_m3" value="<?php echo ($this->input->post('a_m3') ? $this->input->post('a_m3') : $rekap_pembayaran_log['a_m3']); ?>" class="form-control" id="a_m3" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="b_pc" class="control-label">B Pc</label>
						<div class="form-group">
							<input type="text" name="b_pc" value="<?php echo ($this->input->post('b_pc') ? $this->input->post('b_pc') : $rekap_pembayaran_log['b_pc']); ?>" class="form-control" id="b_pc" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="b_m3" class="control-label">B M3</label>
						<div class="form-group">
							<input type="text" name="b_m3" value="<?php echo ($this->input->post('b_m3') ? $this->input->post('b_m3') : $rekap_pembayaran_log['b_m3']); ?>" class="form-control" id="b_m3" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="satum_pc" class="control-label">Satum Pc</label>
						<div class="form-group">
							<input type="text" name="satum_pc" value="<?php echo ($this->input->post('satum_pc') ? $this->input->post('satum_pc') : $rekap_pembayaran_log['satum_pc']); ?>" class="form-control" id="satum_pc" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="satum_m3" class="control-label">Satum M3</label>
						<div class="form-group">
							<input type="text" name="satum_m3" value="<?php echo ($this->input->post('satum_m3') ? $this->input->post('satum_m3') : $rekap_pembayaran_log['satum_m3']); ?>" class="form-control" id="satum_m3" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="afkir_pc" class="control-label">Afkir Pc</label>
						<div class="form-group">
							<input type="text" name="afkir_pc" value="<?php echo ($this->input->post('afkir_pc') ? $this->input->post('afkir_pc') : $rekap_pembayaran_log['afkir_pc']); ?>" class="form-control" id="afkir_pc" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="afkir_m3" class="control-label">Afkir M3</label>
						<div class="form-group">
							<input type="text" name="afkir_m3" value="<?php echo ($this->input->post('afkir_m3') ? $this->input->post('afkir_m3') : $rekap_pembayaran_log['afkir_m3']); ?>" class="form-control" id="afkir_m3" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="bpk_no_bpk" class="control-label">Bpk No Bpk</label>
						<div class="form-group">
							<input type="text" name="bpk_no_bpk" value="<?php echo ($this->input->post('bpk_no_bpk') ? $this->input->post('bpk_no_bpk') : $rekap_pembayaran_log['bpk_no_bpk']); ?>" class="form-control" id="bpk_no_bpk" />
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