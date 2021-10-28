<html>
<head>
    <title>Tampil Data Transaksi Penjualan Toko Sepatu</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                Tampil Data Transaksi Penjualan Toko Sepatu
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Pembeli</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th>No HP</th>
                <td>:</td>
                <td>
                    <?= $nohp; ?>
                </td>
            </tr>
            <tr>
                <th>Merk Sepatu</th>
                <td>:</td>
                <td>
                    <?= $merk; ?>
                </td>
            </tr>
            <tr>
                <th>harga</th>
                <td>:</td>
                <td>
                    Rp. <?=$harga; ?>
                </td>
            </tr>
            <tr>
                <th>Ukuran</th>
                <td>:</td>
                <td>
                    <?= $ukuran; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('tokosepatu'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>