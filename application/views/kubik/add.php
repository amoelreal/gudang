<div class="page-header">
  <h4>Data Master</h4>
</div>

<div class="row">
  <div class="col-md-4">
    <!-- start: CONDENSED TABLE PANEL -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-external-link-square"></i>
        Tambah data Kubik
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
        <?php echo form_open('kubik/add','role="form" class="form-horizontal"'); ?>

          <?php echo validation_errors(); ?>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="form-field-2">
              Diameter
            </label>
            <div class="col-sm-9">
              <input type="number" placeholder="Diameter" id="form-field-1" class="form-control" name="id" value="<?php echo $this->input->post('id'); ?>">
            </div>
          </div><div class="form-group">
            <label class="col-sm-3 control-label" for="form-field-2">
              1 M
            </label>
            <div class="col-sm-9">
              <input type="text" name="satum" value="<?php echo $this->input->post('satum'); ?>" class="form-control" id="form-field-2" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="form-field-3">
              1,3 M
            </label>
            <div class="col-sm-9">
              <input type="text" name="satutigam" value="<?php echo $this->input->post('satutigam'); ?>" class="form-control" id="form-field-3" />
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
</div>
