<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Pelanggan</title>
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

        /* Styling untuk tombol aksi */
        .btn-edit {
            background-color: #ffc107;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .btn-hapus {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .btn-edit:hover, .btn-hapus:hover {
            opacity: 0.8;
        }
        @import url(https://fonts.googleapis.com/css?family=Raleway);

*, *:before, *:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

.wrap {
  width: 100%;
  max-width: 900px;
  margin: 4em auto;
  font-family: Raleway, Arial, sans-serif;
  padding: 1em 2em;
}

hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 2px solid #eee;
    margin: 2em 0;
    padding: 0;
}

h1, h2 {
  margin-bottom: 1em;
  border-bottom: 2px solid #eee;
  line-height: 1.5;
}

h1 > small{
  color: #666;
}

h1 > small > a,
p > a{
  color: #3CB371;
  text-decoration: none;
}
h1 > small > a:hover,
p > a:hover{
  text-decoration: underline;
}

/* Buttons styles */
input::-moz-focus-inner,
button::-moz-focus-inner {
	border: 0;
	padding: 0;
}

input[type="submit"].btn,
button.btn {
	cursor: pointer;
}

a.btn,.btn {
  margin-right: 1em; /* remove this while use*/
  margin-bottom: 1em; /* remove this while use*/
	display: inline-block;
	outline: none;
	*zoom: 1;
	text-align: center;
	text-decoration: none;
	font-family: inherit;
	font-weight: 300;
	letter-spacing: 1px;
	vertical-align: middle;
	border: 1px solid;
	transition: all 0.2s ease;
	box-sizing: border-box;
	text-shadow: 0 1px 0 rgba(0,0,0,0.01);
}
/* Radius */
.btn-radius {
  border-radius: 3px;
}
/* Sizes */
.btn-small {
	font-size: 0.8125em;
	padding: 0.4125em 1.25em;
}
.btn-medium {
	font-size: 0.9375em;
	padding: 0.5375em 1.375em;
}
.btn-large {
	font-size: 1.0625em;
	padding: 0.5625em 1.5em;
}

/* Colors */
.btn-green {
	color: #3CB371;
	border-color: #3CB371;
}
.btn-green:hover {
  background: #3CB371;
  color: #fff;
  border-color: #3CB371;		
}

.btn-blue {
	color: #4682B4;
	border-color: #4682B4;
}
.btn-blue:hover {
  background: #4682B4;
  color: #fff;
  border-color: #4682B4;		
}

.btn-orange {
	color: #FF8C00;
	border-color: #FF8C00;
}
.btn-orange:hover {
  background: #FF8C00;
  color: #fff;
  border-color: #FF8C00;		
}

.btn-red {
	color: #B22222;
	border-color: #B22222;
}
.btn-red:hover {
  background: #B22222;
  color: #fff;
  border-color: #B22222;	
}

.btn-gray {
	color: #808080;
	border-color: #808080;
}
.btn-gray:hover {
  background: #808080;
  color: #fff;
  border-color: #808080;	
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
        <h1>Daftar Pelanggan</h1>
        <a href="index.php?controller=pelanggan&action=create" class="btn btn-medium btn-blue">Tambah Data</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $pelanggan): ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $pelanggan['id_pelanggan'] ?></td>
                        <td><?= $pelanggan['nama_pelanggan'] ?></td>
                        <td><?= $pelanggan['alamat'] ?></td>
                        <td>
                            <a href="index.php?controller=pelanggan&action=edit&id=<?= $pelanggan['id_pelanggan'] ?>" class="btn btn-medium btn-orange">Edit</a>
                            <a href="index.php?controller=pelanggan&action=delete&id=<?= $pelanggan['id_pelanggan'] ?>" class="btn btn-red" onclick="return confirm('Kamu yakin akan menghapus data ini ?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
