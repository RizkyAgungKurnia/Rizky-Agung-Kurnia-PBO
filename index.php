<?php 
require_once 'process.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencatatan Barang</title>
    <link rel="stylesheet" href="style.css">
    <style>
    .navbar {
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 10px;
    }

    .navbar .container {
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    .nav-link {
        position: relative;
        text-decoration: none;
        color: #000000;
        font-weight: bold;
        font-size: 16px;
        padding: 8px 15px;
        transition: color 0.3s;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background-color: #007bff;
        transition: width 0.3s ease-in-out;
    }

    .nav-link:hover {
        color: #007bff;
    }

    .nav-link:hover::after {
        width: 100%;
    }
    </style>
</head>

<body>
    <?php include 'navbar.php';?>

    <div class="container">
        <h1>Pencatatan Barang</h1>
        <form method="POST" action="process.php">

            <div>
                <label for="nama">Nama Barang:</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div>
                <label for="harga">Harga Barang:</label>
                <input type="number" id="harga" name="harga" required>
            </div>

            <div>
                <label for="stok">Stok Barang:</label>
                <input type="number" id="stok" name="stok" required>
            </div>

            <button type="submit" name="tambah" class="btn btn-add">Tambah Barang</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($barangList as $barang) : ?>
                <tr>
                    <td><?= htmlspecialchars($barang['id']) ?></td>
                    <td><?= htmlspecialchars($barang['nama']) ?></td>
                    <td><?= htmlspecialchars($barang['harga']) ?></td>
                    <td><?= htmlspecialchars($barang['stok']) ?></td>
                    <td>
                        <a href="process.php?hapus=<?= urlencode($barang['id']) ?>" class="btn btn-delete">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>