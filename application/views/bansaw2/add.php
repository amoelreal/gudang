<div class="page-header">
  <h4>NO BPK : <small><?php echo $this->session->userdata('no_bpk');  ?></small></h4>
</div>
<br>
<?php if (isset($gagal)) {
    echo "<div class='alert alert-danger'>".$gagal."</div>";
} ?>
<div class="row">
  <div class="col-md-4">
    <!-- start: CONDENSED TABLE PANEL -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-external-link-square"></i>
        Tambah Log Bansaw 2
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
        <?php echo form_open('bansaw2/add','role="form" class="form-horizontal"'); ?>

          <?php echo validation_errors(); ?>
          <input type="hidden" name="bpk_no_bpk" value="<?php echo $this->session->userdata('no_bpk') ?>" class="form-control" id="bpk_no_bpk" />
          <div class="form-group">
            <label class="col-sm-2 control-label" for="form-field-1">
              No
            </label>
            <div class="col-sm-9">
              <input type="number" placeholder="No Log" id="form-field-1" class="form-control" name="no" value="<?php echo ($this->input->post('no_log') ? $this->input->post('no_log') : $this->Bansaw2_model->get_number($this->session->userdata('no_bpk'))); ?>" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="form-field-2">
              Diameter
            </label>
            <div class="col-sm-9">
              <input type="number"  id="form-field-2" class="form-control" value="<?php echo $this->input->post('diameter'); ?>" name="diameter" autofocus="">
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
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">
              Tanggal
            </label>
              <div class="col-sm-9">
                <div class="input-group">
                  <input type="text" data-date-format="dd-mm-yyyy" data-date-viewmode="years" class="form-control date-picker" name="tanggal" value="<?php echo ($this->input->post('tanggal') ? $this->input->post('tanggal') : date("d-m-Y")); ?>" />
                  <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                </div>
              </div>
          </div>
          <div class="form-group">
            &nbsp;&nbsp;&nbsp;<button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Tambah</button>
            <a href="<?php echo base_url(); ?>bansaw2/" class="btn btn-danger btn-sm"><i class="clip-arrow-left-2"></i> Kembali</a>
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
      DATA Log bansaw 2 : <?php echo ($this->input->post('no_log') ? $this->input->post('no_log') : $this->Bansaw2_model->get_number($this->session->userdata('no_bpk'))-1); ?>
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
            <th>Tanggal</th>
            <th>No</th>
            <th>D</th>
            <th>Ket</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($bansaw2 as $l){ ?>
          <tr>
            <td><?php echo $this->Bpk_model->IndonesiaTgl($l['tanggal']); ?></td>
            <td><?php echo $l['no']; ?></td>
            <td><?php echo $l['diameter']; ?></td>
            <td><?php echo $l['grade_grade']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- end: CONDENSED TABLE PANEL -->
</div>
</div>
