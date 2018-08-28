<div class="page-header">
  <h4>Data Master</h4>
</div>

<div class="row">
  <div class="col-md-4">
    <!-- start: CONDENSED TABLE PANEL -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-external-link-square"></i>
        Edit data Kubik
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
        <?php echo form_open('kubik/edit/'.$kubik['id'],'role="form" class="form-horizontal"'); ?>

          <?php echo validation_errors(); ?>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="form-field-1">
              ID
            </label>
            <div class="col-sm-9">
              <input type="text" name="no" value="<?php echo ($this->input->post('id') ? $this->input->post('id') : $kubik['id']); ?>" class="form-control" id="form-field-1" readonly />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="form-field-2">
              1 M
            </label>
            <div class="col-sm-9">
              <input type="text" name="satum" value="<?php echo ($this->input->post('satum') ? $this->input->post('satum') : $kubik['satum']); ?>" class="form-control" id="form-field-2" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="form-field-3">
              1,3 M
            </label>
            <div class="col-sm-9">
              <input type="text" name="satutigam" value="<?php echo ($this->input->post('satutigam') ? $this->input->post('satutigam') : $kubik['satutigam']); ?>" class="form-control" id="form-field-2" />
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
