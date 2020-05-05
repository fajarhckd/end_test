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
                <label for="exampleFormControlSelect1">Kelas</label>
                <select class="form-control" id="kelas" name="kelas">
                <option>LT-1 REGULER</option>
                <option>LT-1 PLN</option>
                <option>EK-1 REGULER</option>
                <option>TE-1 REGULER (D4)</option>
                <option>IK-1 REGULER</option>
                <option>LT-2 REGULER</option>
                <option>LT-2 PLN</option>
                <option>EK-2 REGULER</option>
                <option>TE-2 REGULER (D4)</option>
                <option>IK-2 REGULER</option>
                <option>LT-3 REGULER</option>
                <option>LT-3 PLN</option>
                <option>EK-3 REGULER</option>
                <option>TE-3 REGULER (D4)</option>
                <option>IK-3 REGULER</option>
                <option>TE-4A REGULER (D4)</option>
                <option>TE-4B REGULER (D4)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nama">Mata Kuliah</label>
                <input type="text" class="form-control" id="daftar_makul" name="daftar_makul">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>  