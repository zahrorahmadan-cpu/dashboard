<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-primary bg-primary">
  <div class="container">
    <a class="navbar-brand text-white" href="#">Dashboard</a>

    <div class="navbar-nav ms-auto">
      <a class="nav-link active text-white" href="#">Home</a>
      <a class="nav-link text-white" href="#">Produk</a>
      <a class="nav-link text-white" href="#">Kontak</a>
    </div>
  </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <aside class="col-md-2 bg-white min-vh-100 p-3">
            <a class="d-block mb-3 text-decoration-none" href="#"><i class="bi bi-house-door me-2"></i>Dashboard</a>
            <a class="d-block mb-3 text-decoration-none" href="#"> <i class="bi bi-cart3 me-2"></i>Orders</a>
            <a class="d-block mb-3 text-decoration-none" href="#"> <i class="bi bi-box-seam me-2"></i> Products</a>
            <a class="d-block mb-3 text-decoration-none" href="#"> <i class="bi bi-people me-2"></i>Customers</a>
            <a class="d-block mb-3 text-decoration-none" href="#">  <i class="bi bi-bar-chart-line me-2"></i>Reports</a>
            <a class="d-block text-decoration-none" href="#"><i class="bi bi-plug me-2"></i>Integrations</a>
        </aside>

        <main class="col-md-10 p-4">
            <h2>Dashboard</h2>
            <h4 class="mt-4">Data Produk</h4>

            <button class="btn btn-primary btn-sm mb-3">
                Add Product
            </button>
            <div class="table-responsive">
                <table class="table table-striped table-bordered bg-white">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $query = mysqli_query($dbconnect,"SELECT * FROM produk");
                        $no=1;
                        while($tampil = mysqli_fetch_assoc($query)){
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $tampil['nama_barang']; ?></td>
                            <td>Rp. <?= $tampil['harga']; ?></td>
                            <td><?= $tampil['stok']; ?></td>
                            <td>
                                <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                <a href="" class="btn btn-success btn-sm">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                        <?php
                        }
                        ?>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
</body>
</html>