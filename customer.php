<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Customer</title>
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
    <nav class="navbar">
        <div class="container">
            <a href="home.php" class="nav-link">Home</a>
            <a href="index.php" class="nav-link">Pencatatan Barang</a>
            <a href="customer.php" class="nav-link">Tabel Customer</a>
        </div>
    </nav>

    <div class="container">
        <h1>Data Customer</h1>
        <form method="POST" action="process_customer.php">
            <div>
                <label for="nama">Nama Customer:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div>
                <label for="email">Email Customer:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-add">Tambah Customer</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'CustomerManager.php';
                $customerManager = new CustomerManager();
                $customerList = $customerManager->getCustomers();
                foreach ($customerList as $customer) : ?>
                <tr>
                    <td><?= htmlspecialchars($customer['id']) ?></td>
                    <td><?= htmlspecialchars($customer['nama']) ?></td>
                    <td><?= htmlspecialchars($customer['email']) ?></td>
                    <td>
                        <a href="process_customer.php?hapus=<?= urlencode($customer['id']) ?>"
                            class="btn btn-delete">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>