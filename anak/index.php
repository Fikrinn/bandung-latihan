<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anak Panti</title>
    <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
</head>

<body>
    <?php
include '../database.php';
$anakPanti = new Database();

include '../layout/navbar.php';
?>  

    <div class="d-flex justify-content-center align-items-center">

        <div class="col-md-10">
            <div class="card">


                <div class="card body">


                    <div class="justify-content-center d-flex">

                        <div class="col-md-10">
                            <div class="card-title d-flex justify-content-between my-5">
                                <h3 class="d-flex">Daftar Anak Di panti asuhan</h3>
                                <a href="/admin/anak/create.php" type="submit" class="btn btn-primary d-flex">Tambah</a>
                            </div>

                            <table class="table text-center ">
                                <thead class="bg-primary text-light">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pengurus</th>
                                    <th>Status</th>
                                    <th>Show</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </thead>

                                <?php foreach ($anakPanti->index() as $data) {?>

                                    <tbody>
                                        <tr>
                                            <td><?php echo $index += 1 ?></td>
                                            <td><?php echo $data['nama'] ?></td>
                                            <td><?php echo $data['jenis_kelamin'] ?></td>
                                            <td><?php echo $data['nama'] ?></td>
                                            <td><?php echo $data['status'] ?></td>
                                            <td><a class="btn btn-info text-light" href="/admin/anak/show.php?id=<?php echo $data['id'] ?>">Show</a></td>
                                            <td><a class="btn btn-success" href="/admin/anak/edit.php?id=<?php echo $data['id'] ?>">Edit</a></td>
                                            <td>
                                                <form action="/admin/anak/proses.php" method="post">
                                                    <input type="hidden" name="aksi" value="destroy">
                                                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                                    <button class="btn btn-danger" type="submit" name="save" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')">
                                                        Delete
                                                    </button>
                                                </form>

                                            </td>

                                        </tr>

                                    </tbody>
                            </table>
                                <?php }?>

                        </div>

                    </div>


                </div>


            </div>
        </div>

    </div>


</body>

</html>