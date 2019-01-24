
<a data-toggle="modal" data-target="#modal-edit<?=$row->id;?>" class="btn btn-warning btn-sm" title="Edit Data"><i class="fa fa-edit"></i></a>

<!-- Modal -->
<div class="modal fade" id="modal-edit<?=$row->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data <?= $row->nama ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open(base_url('mahasiswa/edit/'.$row->id),array('id' => 'form-edit')); ?>
        	<input type="hidden" value="<?= $row->id ?>">
        	<div class="form-group">
        		<label>Nama</label>
        		<input type="text" name="nama" class="form-control" value="<?= $row->nama ?>">
        	</div>
        	<div class="form-group">
        		<label>Email</label>
        		<input type="text" name="email" class="form-control" value="<?= $row->email ?>">
        	</div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
        	<div class="form-group">
        		<label>Jurusan</label>
        		<select name="jurusan" class="form-control">
        			<?php foreach ($jurusan as $j) { ?>
        			<?php if ($j == $row->jurusan) : ?>
        				<option value="<?= $j ?>" selected><?= $j ?></option>
        			<?php else : ?>
        				<option value="<?= $j ?>"><?= $j ?></option>
        			<?php endif; ?>
        			<?php } ?>
        		</select>
        	</div>
        	<div class="form-group">
        		<button type="submit" id="update" name="submit" class="btn btn-info float-right">
                    <i class="fa fa-save"></i> Simpan Perubahan</button>
        	</div>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>