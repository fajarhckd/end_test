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
                <input type="text" class="form-control" id="nip" name="nip">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Prodi</label>
                <select class="form-control" id="prodi" name="prodi">
                <option>IK</option>
                <option>LT</option>
                <option>TK</option>
                <option>TE</option>
                <option>EK</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div> 