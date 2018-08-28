<div class="page-header">
  <h4>DATA Master</h4>
</div>

<div class="row">
  <div class="col-md-8">
  <!-- start: CONDENSED TABLE PANEL -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <i class="fa fa-external-link-square"></i>
      Data User
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
      <a class="btn btn-primary btn-sm" href="<?php echo site_url('user/add'); ?>"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah User</a><br><br>
      <table class="table table-bordered table-hover" id="sample-table-3">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Username</th>
						<th>Password</th>
						<th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach($user as $u){ ?>
          <tr>
						<td><?php echo $no; ?></td>
            <td><?php echo $u['nama']; ?></td>
            <td><?php echo $u['jabatan']; ?></td>
            <td><?php echo $u['username']; ?></td>
						<td><?php echo $u['password']; ?></td>
						<td>
              <a href="<?php echo site_url('user/edit/'.$u['id']); ?>" class="btn btn-info btn-sm"><span class="fa fa-pencil"></span></a>
              <a href="<?php echo site_url('user/remove/'.$u['id']); ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
              </td>
          </tr>
          <?php  $no++; } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
