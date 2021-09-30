<?php
include '../database.php';
$pengurus = new Database();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Anak Panti</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
</head>

<body>

    <?php include '../layout/navbar.php'?>

    <form action="/admin/anak/proses.php" method="post">
        <input type="hidden" name="aksi" value="create">

        <div class="d-flex justify-content-center">

            <div class="card col-md-8">
                <div class="card-body">
                    <div class="card-title text-center">
                        <h3>Tambah Data Anak Panti</h3>
                    </div>

                    <div class="form-check mb-2">
                        <label class="label-form-check" for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>

                    <div class="form-check mb-2 d-flex">
                        Status
                        <div class="form-check mx-3">
                            <input type="checkbox" name="status[]" id="yatim" value="Yatim" class="form-check-input">
                            <label class="label-form-check" for="yatim">Yatim</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" name="status[]" id="piatu" value="Piatu" class="form-check-input">
                            <label class="label-form-check" for="piatu">Piatu</label>
                        </div>
                    </div>

                    <div class="form-check mb-2">
                        <label class="label-form-check" for="nik">NIK</label>
                        <input type="number" name="nik" id="nik" class="form-control">
                    </div>

                    <div class="form-check mb-2">
                        <label class="label-form-check" for="agama">Agama</label>
                        <select name="agama" id="agama" class="form-control form-select">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghuchu">Konghuchu</option>
                        </select>
                    </div>

                    <div class="form-check mb-2">
                        <label class="label-form-check" for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tangga_lahir" class="form-control">
                    </div>

                    <div class="form-check mb-2">
                        Jenis Kelamin
                        <label class="label-form-check mx-4" for="l"><input type="radio" name="jenis_kelamin" id="l" value="Laki-laki" class="form-check-input">Laki-laki</label>
                        <label class="label-form-check" for="p"><input type="radio" name="jenis_kelamin" id="p" value="Perempuan" class="form-check-input">Perempuan</label>
                    </div>

                    <div class="form-check mb-2">
                        <label class="label-form-check" for="id_pengurus">Pengurus</label>
                        <select name="id_pengurus" id="id_pengurus" class="form-control form-select">
                            <?php
foreach ($pengurus->index() as $data) {?>
                                <option value="<?php echo $data['id'] ?>"><?php echo $data['nama'] ?></option>
                            <?php }?>
                        </select>
                    </div>

                    <div class="form-check mb-2">
                    <button type="submit" name="save" class="btn btn-primary">Tambah</button>
                    </div>


                </div>
            </div>

        </div>

    </form>

</body>

</html>