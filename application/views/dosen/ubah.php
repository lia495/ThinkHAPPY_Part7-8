<div class="container">
    <div class="row mt-5">
        <div class="col-md-5">
            <div class="card mt-4">
                <h5 class="card-header">
                  From Ubah Data Dosen
                </h5>
                <div class="card-body">
                    <form action="" method="post">
                       <input type="hidden" name="id" value="<?=$dosen['id']; ?>">
                        <div class="form-group"> <!-- Perbaikan di sini -->
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" value="<?=$dosen['id'];?>" id="nip" name="nip">
                            <small class="form-text text-danger"><?= form_error ('nip')?></small>
                        </div>
                        <div class="form-group"> <!-- Perbaikan di sini -->
                            <label for="namadosen">NAMA DOSEN</label>
                            <input type="text" class="form-control" value="<?=$dosen['namadosen'];?>"id="namadosen" name="namadosen">
                            <small class="form-text text-danger"><?= form_error ('namadosen')?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-end" style="background-color: #FFFF00; border: 1px solid #ffffff;">เปลี่ยน</button>

                        <button type="button" class="btn btn-custom float-end me-2" style=" background-color: #00796B; border: 1px solid #ffffff;"    onclick="window.history.back();">กลับ</button>   

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
