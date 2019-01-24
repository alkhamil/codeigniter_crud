<div class="container">
	 <?php  
	      if ($this->session->flashdata('sukses')) {
	        $sukses = $this->session->flashdata('sukses');
	        echo $sukses;
	      }
	  ?>
	<div class="row mt-3">
		<?php include 'tambah.php'; ?>
		<div class="table-responsive">
			<table class="table table-sm table-bordered mt-2">
			<thead class="bg-dark text-white">
				<tr>
					<td>#</td>
					<td>Nama</td>
					<td>Email</td>
					<td>Password</td>
					<td>Jurusan</td>
					<td>Aksi</td>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; foreach ($get_all as $row) { ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $row->nama ?></td>
					<td><?= $row->email ?></td>
					<td><?= $row->password ?></td>
					<td><?= $row->jurusan ?></td>
					<td>
					<?php include 'edit.php'; ?>
                      <a style="text-decoration: none;" href="<?php echo base_url() ?>mahasiswa/hapus/<?php echo $row->id ?>" class="btn btn-danger btn-sm btn-hapus" ><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		</div>
		
	</div>
</div>

