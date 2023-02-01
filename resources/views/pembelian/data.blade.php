<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pembelian</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-10">
                <h1>Data <?php echo $judul; ?></h1>
            </div>
            <div class="col-2">
                <button class="btn btn-success">
                    Tambah <?php echo $judul; ?>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                      <tr class="bg-dark text-white">
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">No. Invoice</th>
                        <th scope="col">Nama Distributor</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Option</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($data as $key) { ?>
                            <tr>
                                <th scope="row"><?php echo $no++ ?></th>
                                <td><?php echo $key['tgl']; ?></td>
                                <td><?php echo $key['inv']; ?></td>
                                <td><?php echo $key['nama']; ?></td>
                                <td><?php echo $key['total']; ?></td>
                                <td>
                                    <button class="btn btn-primary">UBAH</button>
                                    <button class="btn btn-danger">HAPUS</button>
                                </td>
                              </tr>
                        <?php
                        } ?>
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</html>