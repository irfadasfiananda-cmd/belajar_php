<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Kelompok</title>
</head>
<body>

    <h1>Form Data Kendaraan</h1>

    <form action="local" method="POST">
        <div>
            <label>Nama Kendaraan</label><br>
            <input type="text"
                name="nama_kendaraan"
                pattern="[A-Za-z ]+"
                title="Nama Kendaraan hanya boleh berisi huruf"
                required> 
        </div>
        <br>
        <div>
            <label for="kode">Kode Kendaraan</label><br>
            <input type="number"
                name="kodekendaraan"
                min="1"
                step="1"
                title= "Kode hanya boleh berupa angka bulat"
                required>
                </div>
        <br>
        <div>
            <button type="submit">Simpan Data</button>
            <!-- <input type="Submit" value="Simpan"> -->
        </div>
    </form>
</body>
</html>