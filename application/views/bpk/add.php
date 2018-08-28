<!-- start: TEXT FIELDS PANEL -->
<div class="panel panel-default">
  <div class="panel-heading">
    <i class="fa fa-external-link-square"></i>
    Tambah BPK
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
    <?php echo form_open('bpk/add','role="form" class="form-horizontal"'); ?>

      <?php echo validation_errors(); ?>

      <div class="form-group">
        <label class="col-sm-2 control-label" for="form-field-1">
          No BPK
        </label>
        <div class="col-sm-9">
          <input type="text" placeholder="No BPK" id="form-field-1" class="form-control" name="no_bpk" value="<?php echo $this->input->post('no_bpk'); ?>">
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
        <label class="col-sm-2 control-label" for="form-field-2">
          Nama Supplier
        </label>
        <div class="col-sm-9">
          <input type="text" placeholder="Nama Supplier" id="form-field-2" class="form-control" name="nama_supplier" value="<?php echo $this->input->post('nama_supplier'); ?>" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="form-field-3">
          Nama Sopir
        </label>
        <div class="col-sm-9">
          <input type="text" placeholder="Nama Sopir" id="form-field-3" class="form-control" name="nama_sopir" value="<?php echo $this->input->post('nama_sopir'); ?>" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="form-field-4">
          Dokumen
        </label>
        <div class="col-sm-9">
          <input type="text" placeholder="Dokumen" id="form-field-4" class="form-control" name="dokumen" value="<?php echo $this->input->post('dokumen'); ?>" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="form-field-22">
          Asal
        </label>
        <div class="col-sm-9">
        <textarea placeholder="Asal" id="form-field-22" class="form-control" name="asal"><?php echo $this->input->post('asal'); ?></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="form-field-5">
          Jumlah Batang Pcs
        </label>
        <div class="col-sm-9">
          <input type="number" placeholder="Jumlah batang pcs" id="form-field-5" class="form-control" name="jumlah_batang_pcs" value="<?php echo $this->input->post('jumlah_batang_pcs'); ?>" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="form-field-7">
          Volume
        </label>
        <div class="col-sm-9">
          <input type="number" placeholder="Volume kubikasi" id="form-field-7" class="form-control" name="volume_m3" value="<?php echo $this->input->post('volume_m3'); ?>" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="form-field-8">
          No HP Supplier
        </label>
        <div class="col-sm-9">
          <input type="number" placeholder="No HP Supplier" id="form-field-8" class="form-control" name="no_hp" value="<?php echo $this->input->post('no_hp'); ?>" class="form-control" id="no_hp" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="form-field-8">
          No HP Sopir
        </label>
        <div class="col-sm-9">
          <input type="number" placeholder="No HP Sopir" id="form-field-8" class="form-control" name="no_hp_sopir" value="<?php echo $this->input->post('no_hp_sopir'); ?>" class="form-control" id="no_hp" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="form-field-9">
          Jam Masuk
        </label>
        <div class="col-sm-9">
          <div class="input-group input-append bootstrap-timepicker">
            <input type="text" class="form-control time-picker" value="<?php echo ($this->input->post('jam_masuk') ? $this->input->post('jam_masuk') : date("h:ia")); ?>" name="jam_masuk" />
            <span class="input-group-addon add-on"><i class="fa fa-clock-o" ></i></span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="form-field-10">
          No Polisi
        </label>
        <div class="col-sm-9">
          <input type="text" placeholder="No Polisi" id="form-field-10" class="form-control" name="no_polisi" value="<?php echo $this->input->post('no_polisi'); ?>" />
        </div>
      </div>
      <!-- <div class="form-group">
        <label class="col-sm-2 control-label" for="form-field-4">
          Jenis
        </label>
        <div class="col-sm-9">
          <label class="radio-inline">
            <input type="radio" class="square-green" value="log" name="jenis">
            Log
          </label>
          <label class="radio-inline">
            <input type="radio" class="square-green" value="balken" name="jenis">
            Balken
          </label>
        </div>
      </div> -->
      <div class="form-group">
        <label class="col-sm-2 control-label" for="form-field-4">
          Jenis Kayu
        </label>
        <div class="col-sm-9">
          <label class="radio-inline">
            <input type="radio" class="square-green" value="Sengon" name="jenis_kayu">
            Sengon
          </label>
          <label class="radio-inline">
            <input type="radio" class="square-green" value="Non Sengon" name="jenis_kayu">
            Non Sengon
          </label>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2 control-label">
          <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
        </div>
      </div>
      <?php echo form_close(); ?>
    </div>
</div>
<!-- end: TEXT FIELDS PANEL -->
