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
                <label for="nama">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Prodi</label>
                <select class="form-control" id="prodi" name="prodi">
                <option>D-III TEKNIK LISTRIK</option>
                <option>D-III TEKNIK ELEKTRONIKA</option>
                <option>D-III TEKNIK INFORMATIKA</option>
                <option>D-III TEKNIK TELEKOMUNIKASI</option>
                <option>D-IV TEKNIK TELEKOMUNIKASI</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>  