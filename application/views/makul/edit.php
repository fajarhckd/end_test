<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <?php if(validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors();?>
        </div>
        <?php endif;?>
        
            <form action="" method="post">
            <input type="hidden" name="no" value="<?=$makul['no'];?>">    
            <div class="form-group">
                <label for="nama">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" value="<?=$makul['kelas'];?>">
            </div>
            <div class="form-group">
                <label for="nama">Makul</label>
                <input type="text" class="form-control" id="makul" name="daftar_makul" value="<?=$makul['daftar_makul'];?>">
            </div>
            <button type="submit" class="btn btn-primary" name="edit">Edit Data</button>
            </form>
        </div>
    </div>
</div> 