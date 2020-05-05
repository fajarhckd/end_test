<div class="container">

    <div class="page-header">
			<div class="page-title">
				<h3>Daftar Dosen Jurusan Elektro  </h3>
				<a href="<?=base_url();?>dosen/tambah" class="btn btn-primary"> Tambah Data Dosen </a>
			</div>
    </div>

    <?php if($this->session->flashdata('flash')) : ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data dosen <strong>Berhasil!</strong> <?=$this->session->flashdata('flash');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> 
        </div>    
    </div>
    <?php endif;   ?>
    
	<div class="row">
		<div class="col-md-12">
				<div class="widget-content">
					<table class="table table-striped table-bordered table-hover table-checkable datatable">
						<thead>
							<tr>
								<th class="checkbox-column">
									<input type="checkbox" class="uniform">
								</th>
								<th>NIP</th>
								<th>Nama</th>
								<th>Prodi</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($dosen as $dsn) : ?>
							<tr>
								<td class="checkbox-column">
									<input type="checkbox" class="uniform">
								</td>
								<td><?= $dsn['nip'];?> </td>
								<td><?= $dsn['nama'];?> </td>
								<td align="center"><?= $dsn['prodi'];?> </td>
								<td>
								<a href="<?=base_url();?>dosen/hapus/<?=$dsn['nip'];?>" class="btn btn-sm btn-danger" onclick="return confirm('yaqin?'); ">Hapus</a>
								<a href="<?=base_url();?>dosen/edit/<?=$dsn['nip'];?>" class="btn btn-sm btn-primary">Edit</a>
								</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
		</div>
	</div>
</div> 
</div>