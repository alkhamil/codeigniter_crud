<style>
    .error{
        color: red;
    }
</style>
<button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button>


<!-- Modal -->
<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open(base_url('mahasiswa/add'),array('id' => 'form-tambah')); ?>
        	<div class="form-group">
        		<label><strong class="text-danger">*</strong> Nama</label>
        		<input type="text" id="nama" name="nama" class="form-control" value="<?= set_value('nama') ?>">
        	</div>
        	<div class="form-group">
        		<label><strong class="text-danger">*</strong> Email</label>
        		<input type="text" id="email" name="email" class="form-control" value="<?= set_value('email') ?>">
                <div class="error"><?= form_error('email') ?></div>
        	</div>
            <div class="form-group">
                <label><strong class="text-danger">*</strong> Password</label>
                <input type="password" id="password" name="password" class="form-control" value="<?= set_value('password') ?>">
            </div>
        	<div class="form-group">
        		<label>Jurusan</label>
        		<select name="jurusan" class="form-control">
        			<?php foreach ($jurusan as $j) { ?>
        			<option value="<?= $j ?>"><?= $j ?></option>
        			<?php } ?>
        		</select>
        	</div>
        	<div class="form-group">
        		<button type="submit" id="submit" name="submit" class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan Data</button>
        	</div>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>
