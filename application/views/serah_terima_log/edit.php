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
        Edit Penerimaan Log
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
        <?php echo form_open('serah_terima_log/edit/'.$serah_terima_log['id'],'role="form" class="form-horizontal"'); ?>

          <?php echo validation_errors(); ?>
          <input type="hidden" name="bpk_no_bpk" value="<?php echo $this->session->userdata('no_bpk') ?>" class="form-control" id="bpk_no_bpk" />
          <div class="form-group">
            <label class="col-sm-2 control-label" for="form-field-1">
              NoLog
            </label>
            <div class="col-sm-9">
              <input type="number" placeholder="No Log" id="form-field-1" class="form-control" name="no_log" value="<?php echo ($this->input->post('no_log') ? $this->input->post('no_log') : $serah_terima_log['no_log']); ?>" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="form-field-2">
              Diameter
            </label>
            <div class="col-sm-9">
              <input type="number" placeholder="Diameter" id="form-field-2" class="form-control" value="<?php echo ($this->input->post('diameter') ? $this->input->post('diameter') : $serah_terima_log['diameter']); ?>" name="diameter" autofocus="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="form-field-3">
              Kelas
            </label>
                <div class="col-sm-9">
                  <?php
                  $select = $this->input->post('grade_grade') ? $this->input->post('grade_grade') : $serah_terima_log['grade_grade'];
                  echo cmb_dinamis('grade_grade', 'grade', 'grade', 'grade', $select);
                  ?>
              </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2 control-label">
              <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Update</button>
            </div>
          </div>
          <?php echo form_close(); ?>
        </div>
    </div>
  </div>
<!-- end: TEXT FIELDS PANEL -->
</div>
