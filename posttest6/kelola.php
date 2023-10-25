<?php
require'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM data_customer");

$posttest = [];

while ($row = mysqli_fetch_assoc($result)) {
    $posttest[] = $row;
}

?>

<!DOCTYPE html>

<html>

<head>
    <link rel="icon" href="Gambar/Melody.ico">
    <title >Melody Guitar Store</title>
    <link rel ="stylesheet" href = "style2.css">
    <script src="main.js"></script>
</head>
<body>
    <header>
        <nav>
        <div class="wrap">
                <div class="logo"><a href="index.php"><img src="Gambar/Melody.png"></a></div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about_us.php">About Us</a></li>
                        <li><a href="order.php">Order</a></li>
                        <li id="katalog"><a href="">Catalogue</a></li>
                        <label id="ubah"></label>
                    </ul>
                </div>
            </div>
            
        </div>
    </nav>
    </header>
    

    <div class="wrap">
        <section class="banner">
            <img src="Gambar/Banner.png"width="100%"></p>
        </section>
    </div>

    <table border = 0>
        <button><a href="order.php">Tambah Data</a></button>
        <td colspan = "9" align = "center"></td>
        <tr>
            <th>No</th>
            <th>Nama Customer</th>
            <th>Jenis Barang</th>
            <th>Jumlah Barang</th>
            <th>Alamat Customer</th>
            <th>Metode Pembayaran</th>
            <th>Tanggal Pemesanan</th>
            <th>Foto Barang</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; foreach ($posttest as $cust) : ?>
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $cust['nama'];?></td>
            <td><?php echo $cust['jenis_barang'];?></td>
            <td><?php echo $cust['jumlah_barang'];?></td>
            <td><?php echo $cust['alamat'];?></td>
            <td><?php echo $cust['metode_pembayaran'];?></td>
            <td><?php echo $cust['tanggal_pemesanan'];?></td>
            <td><?php echo $cust['foto_barang'];?></td>
            
            <td> <a href="ubah.php?nomor=<?php echo $cust['nomor']; ?>">Edit</a> | <a href="hapus.php?nomor=<?php echo $cust['nomor']; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')" >Hapus</a> </td>
        </tr>
        <?php $i++; endforeach;?>
    </table>
    
    <footer class="footer">
    <h3>Melody Guitar Store</h3>
        <p> Toko offline di jl aw syahranie GG1 NO 20 
            <br>
            Selamat berbelanja !
            <br>
        </p>
        <h4>Copyright 2023 - Hudzaifah Alqarani</h4>
    </footer>
    <script src="main.js"></script>
</body>
</html>