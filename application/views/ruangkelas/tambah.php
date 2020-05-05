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
                <option>LISTRIK D3 REGULER</option>
                <option>LISTRIK D3 PLN</option>
                <option>ELEKTRONIKA D3 REGULER</option>
                <option>TELKOM D3 REGULER</option>
                <option>TELKOM D4 REGULER</option>
                <option>INFORMATIKA D3 REGULER</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nama">Ruang</label>
                <input type="text" class="form-control" id="ruang" name="ruang">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>  