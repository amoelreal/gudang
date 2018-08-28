<div class="page-header">
  <h4>DATA Master</h4>
</div>

<div class="row">
  <div class="col-md-3">
    <!-- start: CONDENSED TABLE PANEL -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-external-link-square"></i>
        Data Grade
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
              <th>Grade</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach($grade as $g){ ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $g['grade']; ?></td>
              <!-- <td>
                    <a href="<?php //echo site_url('grade/remove/'.$g['grade']); ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                </td> -->
            </tr>
            <?php
            $no++;  } ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- end: CONDENSED TABLE PANEL -->
  </div>
</div>
