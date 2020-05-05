<div class="container">

    <?php if($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Prodi <strong>Berhasil!</strong> <?=$this->session->flashdata('flash');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> 
        </div>    
    </div>
    <?php endif;   ?>

    <div class="page-header">
			<div class="page-title">
				<h3>Daftar Prodi Jurusan Elektro  </h3>
            <a href="<?=base_url();?>prodi/tambah" class="btn btn-primary"> Tambah Data Prodi </a> 
			</div>
    </div>

    <div class="row">
		<div class="col-md-6">
			<div class="widget-content">
				<table class="table table-striped table-bordered table-hover table-checkable datatable">
					<thead>
						<tr>
							<th class="checkbox-column">
								<input type="checkbox" class="uniform">
							</th>
							<th>Prodi</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($prodi as $prod) : ?>
						<tr>
							<td class="checkbox-column">
								<input type="checkbox" class="uniform">
							</td>
							<td><?= $prod['nama'];?> </td>
							<td>
							<a href="<?=base_url();?>prodi/hapus/<?=$prod['id'];?>" class="btn btn-sm btn-danger" onclick="return confirm('yaqin?'); ">Hapus</a>
							<a href="<?=base_url();?>prodi/edit/<?=$prod['id'];?>" class="btn btn-sm btn-primary">Edit</a>
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div> 