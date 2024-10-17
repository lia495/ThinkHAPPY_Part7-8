<div class="container">
    <div class="row mt-5">
        <div class="col-md-5">
            <div class="card mt-4">
                <h5 class="card-header">
                  From Tambah Data Dosen
                </h5>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group"> <!-- Perbaikan di sini -->
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip">
                            <small class="form-text text-danger"><?= isset($errors['nip']) ? $errors['nip'] : '' ?></small> <!-- Perbaikan di sini -->
                        </div>
                        <div class="form-group"> <!-- Perbaikan di sini -->
                            <label for="namadosen">NAMA DOSEN</label>
                            <input type="text" class="form-control" id="namadosen" name="namadosen">
                            <small class="form-text text-danger"><?= isset($errors['namadosen']) ? $errors['namadosen'] : '' ?></small> <!-- Perbaikan di sini -->
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-end" style="background-color: #FFFF00; border: 1px solid #ffffff;" onclick="window.history">เพิ่ม</button>

                        <button type="button" class="btn btn-custom float-end me-2" style=" background-color: #0000FF; border: 1px solid #ffffff;"    onclick="window.history.back();">กลับ</button>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
