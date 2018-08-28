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
        Penerimaan Log
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
        <?php echo form_open('serah_terima_log/add','role="form" class="form-horizontal"'); ?>

          <?php echo validation_errors(); ?>
          <input type="hidden" name="bpk_no_bpk" value="<?php echo $this->session->userdata('no_bpk') ?>" class="form-control" id="bpk_no_bpk" />
          <div class="form-group">
            <label class="col-sm-2 control-label" for="form-field-1">
              NoLog
            </label>
            <div class="col-sm-9">
              <input type="number" placeholder="No Log" id="form-field-1" class="form-control" name="no_log" value="<?php echo ($this->input->post('no_log') ? $this->input->post('no_log') : $this->Serah_terima_log_model->get_number($this->session->userdata('no_bpk'))); ?>" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="form-field-2">
              Diameter
            </label>
            <div class="col-sm-9">
              <input type="number" id="form-field-2" class="form-control" value="<?php echo $this->input->post('diameter'); ?>" name="diameter" autofocus="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="form-field-3">
              Kelas
            </label>
                <div class="col-sm-9">
                  <select class="form-control" name="grade_grade">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="1M">1M</option>
                    <option value="AF">AFKIR</option>
                  </select>
                  <?php
                  //echo //cmb_dinamis('grade_grade', 'grade', 'grade', 'grade');
                  ?>
              </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2 control-label">
              <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Tambah</button>
            </div>
          </div>
          <?php echo form_close(); ?>
        </div>
    </div>
  </div>
<!-- end: TEXT FIELDS PANEL -->

<div class="col-md-4">
  <!-- start: CONDENSED TABLE PANEL -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <i class="fa fa-external-link-square"></i>
      DATA Log masuk : <?php echo ($this->input->post('no_log') ? $this->input->post('no_log') : $this->Serah_terima_log_model->get_number($this->session->userdata('no_bpk'))-1); ?>
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
      <table class="table table-bordered table-hover" id="sample-table-3">
        <thead>
          <tr>
            <th>No</th>
            <th>D</th>
            <th>Ket</th>
            <th>Act</th>
          </tr>
        </thead>
        <tbody>
        </tr>
        <?php foreach($serah_terima_log as $s){ ?>
        <tr>
            <td><?php echo $s['no_log']; ?></td>
            <td><?php echo $s['diameter']; ?></td>
            <td><?php echo $s['grade_grade']; ?></td>
            <td>
                <a href="<?php echo site_url('serah_terima_log/edit/'.$s['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span></a>
                <a href="<?php echo site_url('serah_terima_log/remove/'.$s['id']); ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
        </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- end: CONDENSED TABLE PANEL -->
</div>
</div>
