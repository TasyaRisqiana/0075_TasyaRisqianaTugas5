<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Styling untuk navbar */
        nav {
            margin-bottom: 20px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 15px;
        }

        /* Styling untuk teks di tengah */
        h1 {
            text-align: center;
            margin-top: 20px;
            font-weight: normal;
            color: #343a40; /* Warna teks gelap untuk kontras */
        }
/* Styling untuk navbar */
nav {
            margin-bottom: 20px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 15px;
        }

        /* Styling untuk header */
        h1 {
            font-weight: normal;
            font-size: 1.5rem;
            margin-top: 10px;
        }

        /* Container utama */
        .container {
            border: 1px solid #ddd;
            padding: 20px;
            margin-top: 20px;
        }

        /* Tombol tambah data */
        .btn-tambah {
            margin-bottom: 10px;
            display: inline-block;
        }

        /* Styling tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            text-align: center;
            padding: 8px;
            border: 1px solid #dee2e6;
        }

        th {
            background-color: #f8f9fa;
            font-weight: bold;
        }


        /* Styling untuk tautan navbar */
        nav a {
            color: #007BFF;
            text-decoration: none;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #0056b3; /* Warna saat hover */
            text-decoration: underline; /* Garis bawah saat hover */
        }

        hr {
            border: 1px solid #e9ecef; /* Warna border untuk hr */
        }
        h1 {
            font-weight: normal;
            font-size: 1.5rem;
            margin-top: 10px;
        }

    </style>
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="index.php?controller=home&action=index">Home</a></li>
                <li><a href="index.php?controller=barang&action=index">Barang</a></li>
                <li><a href="index.php?controller=pelanggan&action=index">Pelanggan</a></li>
                <li><a href="index.php?controller=transaksi&action=index">Transaksi</a></li>
            </ul>
        </nav>
<hr>
        <h1>Selamat datang di aplikasi penjualan</h1>

        <div id="content">
            <!-- Konten halaman akan ditampilkan di sini -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
