<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Detail Transaksi</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #343a40;
            margin-bottom: 20px;
            font-size: 1.5em;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
            padding: 10px;
            border-bottom: 1px solid #e9ecef;
        }

        .info-row strong {
            color: #495057;
        }

        .info-row span {
            color: #6c757d;
        }

        a.btn {
            display: block;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            text-align: center;
            border-radius: 5px;
            margin-top: 15px;
            transition: background-color 0.3s;
        }

        a.btn:hover {
            background-color: #0056b3;
        }

        @media (max-width: 400px) {
            .container {
                width: 90%;
                padding: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Detail Transaksi ID: <?= htmlspecialchars($transaksiDetail['id_transaksi']) ?></h2>
        <div class="info-row">
            <strong>Nama Barang:</strong>
            <span><?= htmlspecialchars($transaksiDetail['nama_barang']) ?></span>
        </div>
        <div class="info-row">
            <strong>Nama Pelanggan:</strong>
            <span><?= htmlspecialchars($transaksiDetail['nama_pelanggan']) ?></span>
        </div>
        <div class="info-row">
            <strong>Jumlah:</strong>
            <span><?= htmlspecialchars($transaksiDetail['jumlah']) ?></span>
        </div>
        <div class="info-row">
            <strong>Total Harga:</strong>
            <span><?= htmlspecialchars($transaksiDetail['total_harga']) ?></span>
        </div>
        <div class="info-row">
            <strong>Tanggal:</strong>
            <span><?= htmlspecialchars($transaksiDetail['tanggal_transaksi']) ?></span>
        </div>
        <a href="index.php?controller=transaksi&action=index" class="btn">Kembali</a>
    </div>
</body>

</html>
