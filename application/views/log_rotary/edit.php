<div class="page-header">
  <h4>NO BPK : <small><?php echo $this->session->userdata('no_bpk');  ?></small></h4>
</div>
    <br>
<div class="row">
  <div class="col-md-4">
    <!-- start: CONDENSED TABLE PANEL -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-external-link-square"></i>
        Edit Log Rotary
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
        <?php echo form_open('log_rotary/edit/'.$log_rotary['id'],'role="form" class="form-horizontal"'); ?>

          <?php echo validation_errors(); ?>
          <input type="hidden" name="bpk_no_bpk" value="<?php echo $this->session->userdata('no_bpk') ?>" class="form-control" id="bpk_no_bpk" />
          <div class="form-group">
            <label class="col-sm-2 control-label" for="form-field-1">
              NoLog
            </label>
            <div class="col-sm-9">
              <input type="number" placeholder="No Log" id="form-field-1" class="form-control" name="no" value="<?php echo ($this->input->post('no') ? $this->input->post('no') : $log_rotary['no']); ?>" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="form-field-2">
              Diameter
            </label>
            <div class="col-sm-9">
              <input type="number" name="diameter" value="<?php echo ($this->input->post('diameter') ? $this->input->post('diameter') : $log_rotary['diameter']); ?>" class="form-control" id="diameter" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="form-field-3">
              Kelas
            </label>
                <div class="col-sm-9">
                  <?php
                  $select = $this->input->post('grade_grade') ? $this->input->post('grade_grade') : $log_rotary['grade_grade'];
                  echo cmb_dinamis('grade_grade', 'grade', 'grade', 'grade',$select);
                  ?>
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">
              Tanggal
            </label>
              <div class="col-sm-9">
                <div class="input-group">
                  <input type="text" data-date-format="dd-mm-yyyy" data-date-viewmode="years" class="form-control date-picker" name="tanggal" value="<?php echo ($this->input->post('tanggal') ? $this->input->post('tanggal') : $this->Bpk_model->IndonesiaTgl($log_rotary['tanggal'])); ?>" />
                  <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                </div>
              </div>
          </div>
          <div class="form-group">
              &nbsp;&nbsp;&nbsp;<button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Update</button>
              <a href="<?php echo base_url(); ?>cek_log/" class="btn btn-danger btn-sm"><i class="clip-arrow-left-2"></i> Kembali</a>
          </div>
          <?php echo form_close(); ?>
        </div>
    </div>
  </div>
<!-- end: TEXT FIELDS PANEL -->
</div>
