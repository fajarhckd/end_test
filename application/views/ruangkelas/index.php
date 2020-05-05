<div class="container">

    <?php if($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Ruang Kelas <strong>Berhasil!</strong> <?=$this->session->flashdata('flash');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> 
        </div>    
    </div>
    <?php endif;   ?>
 
    <div class="page-header">
			<div class="page-title">
				<h3>Daftar Ruang Kelas Jurusan Elektro  </h3>
            <a href="<?=base_url();?>ruangkelas/tambah" class="btn btn-primary"> Tambah Data Ruang Kelas </a> 
			</div>
    </div>

    <div class="row">
		<div class="col-md-12">
			<div class="widget-content">
				<table class="table table-striped table-bordered table-hover table-checkable datatable">
					<thead>
						<tr>
							<th class="checkbox-column">
								<input type="checkbox" class="uniform">
							</th>
							<th>Kelas</th>
							<th>Ruang</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($ruangkelas as $rkls) : ?>
						<tr>
							<td class="checkbox-column">
								<input type="checkbox" class="uniform">
							</td>
							<td><?= $rkls['kelas'];?> </td>
							<td><?= $rkls['ruang'];?> </td>
							<td>
							<a href="<?=base_url();?>ruangkelas/hapus/<?=$rkls['no'];?>" class="btn btn-sm btn-danger" onclick="return confirm('yaqin?'); ">Hapus</a>
							<a href="<?=base_url();?>ruangkelas/edit/<?=$rkls['no'];?>" class="btn btn-sm btn-primary">Edit</a>
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>   