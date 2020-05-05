<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <?php if(validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors();?>
        </div>
        <?php endif;?>
        
            <form action="" method="post">
            <div class="form-group">
                <label for="nama">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip" value="<?=$dosen['nip'];?>">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?=$dosen['nama'];?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Prodi</label>
                <select class="form-control" id="prodi" name="prodi">
                <?php foreach($prodi as $prd) : ?>
                    <?php if($prd == $dosen['prodi']) : ?>
                        <option value="<?=$prd;?>" selected><?=$prd;?></option>
                    <?php else : ?>
                        <option value="<?=$prd;?>" ><?=$prd;?></option>
                    <?php endif?>
                <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="edit">Edit Data</button>
            </form>
        </div>
    </div>
</div> 