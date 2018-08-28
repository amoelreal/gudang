<div class="page-header">
  <h4>Data Master</h4>
</div>

<div class="row">
  <div class="col-md-8">
    <!-- start: CONDENSED TABLE PANEL -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-external-link-square"></i>
        Edit data User
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
        <?php echo form_open('user/edit/'.$user['id'],'role="form" class="form-horizontal"'); ?>

          <?php echo validation_errors(); ?>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="form-field-1">
              ID
            </label>
            <div class="col-sm-9">
              <input type="text" name="no" value="<?php echo ($this->input->post('id') ? $this->input->post('id') : $user['id']); ?>" class="form-control" id="form-field-1" readonly />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="nama">
              Nama
            </label>
            <div class="col-sm-9">
              <input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $user['nama']); ?>" class="form-control" id="nama" />
							<span class="text-danger"><?php echo form_error('nama');?></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="nama">
              Jabatan
            </label>
            <div class="col-sm-9">
              <select class="form-control" name="jabatan">
                <option value="Admin" <?php if($user['jabatan'] == 'Admin'){ echo "selected"; }  ?>>Admin</option>
                <option value="Satpam" <?php if($user['jabatan'] == 'Satpam'){ echo "selected"; }  ?>>Satpam</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="form-field-3">
              Username
            </label>
            <div class="col-sm-9">
              <input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $user['username']); ?>" class="form-control" id="username" />
							<span class="text-danger"><?php echo form_error('username');?></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="password">
              Password
            </label>
            <div class="col-sm-9">
              <input type="password" name="password" autofocus class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
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
