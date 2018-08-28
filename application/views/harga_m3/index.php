<div class="page-header">
  <h4>DATA Master</h4>
</div>

<div class="row">
  <div class="col-md-4">
  <!-- start: CONDENSED TABLE PANEL -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <i class="fa fa-external-link-square"></i>
      Data Harga
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
            <th>ID</th>
            <th>Grade</th>
            <th>Harga</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($harga_m3 as $h){ ?>
          <tr>
            <td><?php echo $h['id']; ?></td>
            <td><?php echo $h['grade_grade']; ?></td>
            <td><?php echo $this->Rekap_total->format_harga($h['harga']); ?></td>
            <td>
              <a href="<?php echo site_url('harga_m3/edit/'.$h['id']); ?>" class="btn btn-info btn-sm"><span class="fa fa-pencil"></span></a>
              <a href="<?php echo site_url('harga_m3/remove/'.$h['id']); ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
