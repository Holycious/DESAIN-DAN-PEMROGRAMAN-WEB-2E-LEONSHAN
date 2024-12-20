<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2>Data Anggota</h2>
    <a class="btn btn-success mt-2" href="create.php">Tambah Data</a>
    <br><br>
    <?php
    include('konek.php');
    $query = "SELECT * FROM anggota order by id desc";
    $result = sqlsrv_query($conn, $query);
    if ($result === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    ?>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>No. Telp</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
            $jenis_kelamin = ($row['jenis_kelamin'] == 'L') ? 'Laki-Laki' : 'Perempuan';
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $jenis_kelamin; ?></td>
                <td><?php echo $row['no_telp']; ?></td>
                <td>
                    <a class="btn btn-primary" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a class='btn btn-danger' href='#' data-toggle='modal' data-target='#hapusModal<?php echo $row['id']; ?>'>Hapus</a>
                    <div class="modal fade" id="hapusModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin ingin menghapus data dengan nama <b><?php echo $row['nama']; ?></b>?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <a class="btn btn-danger" href="proses.php?aksi=hapus&id=<?php echo $row['id']; ?>">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
