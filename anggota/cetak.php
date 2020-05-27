<h3>Data Anggota</h3>
<table border='1' align='center'>
    <?= include('../koneksi.php'); ?>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Tanggal Lahir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $anggota = "SELECT * FROM tbl_anggota";
        $query = mysqli_query($koneksi, $anggota);
        while ($data = mysqli_fetch_array($query)) {
            $tgl_lahir = $data['tgl_lahir'];
        ?>
            <tr>
                <td><?= $data['id_anggota']; ?></td>
                <td><?= ucwords($data['nama']); ?></td>
                <td><?= $data['alamat']; ?></td>
                <td><?= $data['no_telp']; ?></td>
                <td><?= date('j F Y', strtotime($tgl_lahir)); ?></td>

            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<script>
    window.print();
</script>