<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <?php if(validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors();?>
        </div>
        <?php endif;?>
        
            <form action="" method="post">
            <input type="hidden" name="id" value="<?=$prodi['id'];?>">    
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?=$prodi['nama'];?>">
            </div>
            <button type="submit" class="btn btn-primary" name="edit">Edit Data</button>
            </form>
        </div>
    </div>
</div> 