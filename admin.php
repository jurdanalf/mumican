<?php
    include 'inc/conn.php';
    
    $query = "SELECT * FROM tbl_remaja ORDER BY kelompok_remaja ASC";
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMCA | Admin</title>
    <link rel="stylesheet" href="css/admin.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <?php include 'inc/nav.php'; ?>
    <main>
        <h2>REMAJA MASJID AL-FATAH</h2>
        <p>CANDRABAGA BEKASI BARAT</p>
        <div class="fitur">
            <div class="search">
                <input type="text" id="livesearch" placeholder="Search....">
            </div>
            <div class="tambah">
                <a href="tambah/tambah_remaja.php">Tambah</a>
            </div>
        </div>
        <table>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Kelompok</th>
                <th>Kategori Usia</th>
                <th>Tanggal Lahir</th>
                <th>No. Telepon</th>
                <th>Email</th>
                <th></th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach($result as $row) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><img src="img/<?= $row['foto_remaja']; ?>" alt="<?= $row['nama_remaja']; ?>"></td>
                <td class="left"><?= $row['nama_remaja']; ?></td>
                <td><?= $row['kelompok_remaja']; ?></td>
                <td><?= $row['kategori_remaja']; ?></td>
                <td><?= $row['tanggal_lahir_remaja']; ?></td>
                <td><?= $row['notelp_remaja']; ?></td>
                <td><?= $row['email_remaja']; ?></td>
                <td>
                    <a href="ubah/ubah_remaja.php?id_remaja=<?= $row['id_remaja'];?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16"><path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/></svg>
                    </a> | 
                    <a href="hapus.php?id_remaja=<?= $row['id_remaja']; ?>" onclick="return confirm('Apakah kamu yakin?')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16"><path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/></svg>
                    </a>
                </td>
            </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </table>
    </main>
    <?php include 'inc/footer.php' ?>
</body>
</html>