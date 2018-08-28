<div class="page-header">
  <h4>DATA Master</h4>
</div>

<div class="row">
  <div class="col-md-4">
  <!-- start: CONDENSED TABLE PANEL -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <i class="fa fa-external-link-square"></i>
      Data Kubikasi
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
      <a class="btn btn-primary btn-sm" href="<?php echo site_url('kubik/add'); ?>"><i class="fa fa-plus"></i> Tambah kubikasi</a><br><br>

      <table class="table table-bordered table-hover" id="sample-table-3">
        <thead>
          <tr>
            <th>ID</th>
            <th>1 M</th>
            <th>1,3 M</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($kubik as $k){ ?>
          <tr>
            <td><?php echo $k['id']; ?></td>
            <td><?php echo $k['satum']; ?></td>
            <td><?php echo $k['satutigam']; ?></td>
            <td>
              <a href="<?php echo site_url('kubik/edit/'.$k['id']); ?>" class="btn btn-info btn-sm"><span class="fa fa-pencil"></span></a>
              <a href="<?php echo site_url('kubik/remove/'.$k['id']); ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
              </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
