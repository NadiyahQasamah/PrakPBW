<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #b383ad;
            padding: 20px;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            max-width: 400px;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #94447e;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #94447e;
        }
    </style>
</head>
<body>
    <h2>Tambah Barang</h2>
    <form action="<?= BASEURL; ?>index.php?url=admin/store" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
        <label for="stok">Stok:</label>
        <input type="number" name="stok" id="stok" required>
        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #b383ad;
            padding: 20px;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            max-width: 400px;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #94447e;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #94447e;
        }
    </style>
</head>
<body>
    <h2>Tambah Barang</h2>
    <form action="<?= BASEURL; ?>index.php?url=admin/store" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
        <label for="stok">Stok:</label>
        <input type="number" name="stok" id="stok" required>
        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
>>>>>>> d968932075b22fb6571310b4d6d6ac57703269c6
