<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

    .container {
        max-width: 1100px;
        margin: 20px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .container h1 {
        font-size: 2rem;
        color: black;
    }

    .container p {
        font-size: 1rem;
        margin: 10px 0 20px;
    }

    .features {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
    }

    .feature-item {
        background-color: #f9f9f9;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        flex: 1 1 300px;
        max-width: 300px;
    }

    .feature-item img {
        max-width: 100px;
        margin-bottom: 10px;
    }

    .feature-item h3 {
        font-size: 1.2rem;
        margin-bottom: 10px;
        color: #333;
    }

    .feature-item p {
        font-size: 0.9rem;
        color: #666;
    }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="container">
        <h1>Selamat Datang di Sistem Pencatatan Barang</h1>
        <p>Kelola data barang dengan mudah dan efisien menggunakan sistem kami.</p>

        <div class="features">
            <div class="feature-item">
                <img src="https://cdn-icons-png.flaticon.com/512/2484/2484620.png" alt="Barang Masuk">
                <h3>Barang Masuk</h3>
                <p>Pencatatan barang masuk secara terorganisir.</p>
            </div>
            <div class="feature-item">
                <img src="https://cdn-icons-png.flaticon.com/512/3523/3523063.png" alt="Barang Keluar">
                <h3>Barang Keluar</h3>
                <p>Lacak barang yang keluar dari gudang Anda.</p>
            </div>
            <div class="feature-item">
                <img src="https://cdn-icons-png.flaticon.com/512/1704/1704763.png" alt="Laporan">
                <h3>Laporan</h3>
                <p>Buat laporan bulanan secara otomatis dan akurat.</p>
            </div>
        </div>
    </div>
</body>

</html>