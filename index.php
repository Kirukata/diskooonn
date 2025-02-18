<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gradient-to-r from-blue-500 to-indigo-600 p-5 text-white">
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg text-gray-900">
        <h2 class="text-3xl font-bold mb-4 text-center text-indigo-600"><i class="fas fa-shopping-bag"></i> Pilih Barang</h2>
        
        <form method="POST" action="">
            <label for="barang" class="block mb-2 font-semibold"><i class="fas fa-box"></i> Pilih Barang:</label>
            <select name="barang" id="barang" class="form-select mb-4 border border-indigo-500 rounded-lg">
                <option value="100000">💻 Laptop - Rp. 100.000.000</option>
                <option value="50000">⌨️ Keyboard - Rp. 999.000</option>
                <option value="20000">🖱 Mouse - Rp. 2.000.000</option>
                <option value="20000">HandPhone - Rp. 20.000.000</option>
                <option value="20000">Botol- Rp. 5.000.000</option>
                <option value="20000">Sweater - Rp. 109.000.000</option>
                <option value="20000">Sepatu - Rp. 90.000.000</option>
                <option value="20000">Tas - Rp. 999.000.000</option>
            </select>

            <label for="jumlah" class="block mb-2 font-semibold"><i class="fas fa-sort-numeric-up"></i> Jumlah Barang:</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control mb-4 border border-indigo-500 rounded-lg" min="1" value="1">
            
            <button type="submit" class="btn btn-primary w-full flex items-center justify-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg shadow-md">
                <i class="fas fa-shopping-cart"></i> Beli Sekarang
            </button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $harga = (int)$_POST['barang'];
            $jumlah = (int)$_POST['jumlah'];
            $totalHarga = $harga * $jumlah;
            $diskon = $jumlah > 4 ? 70 : 0;
            $totalSetelahDiskon = $jumlah > 4 ? $totalHarga * 0.3 : $totalHarga;
        ?>
        <div class="mt-4 p-4 bg-indigo-100 rounded-lg text-gray-900 shadow-lg">
            <p><strong><i class="fas fa-list-ol"></i> Total Barang:</strong> <?php echo $jumlah; ?></p>
            <p><strong><i class="fas fa-money-bill-wave"></i> Total Harga:</strong> Rp. <?php echo number_format($totalHarga, 0, ',', '.'); ?></p>
            <p><strong><i class="fas fa-percentage"></i> Diskon:</strong> <?php echo $diskon; ?>%</p>
            <p><strong><i class="fas fa-tags"></i> Total Setelah Diskon:</strong> Rp. <?php echo number_format($totalSetelahDiskon, 0, ',', '.'); ?></p>
        </div>
        <?php } ?>
    </div>
</body>
</html>
