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
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div> 