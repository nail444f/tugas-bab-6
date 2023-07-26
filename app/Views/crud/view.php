<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<style>
    .title a button{
        font-size: 20px;
    }
</style>
<main>
    <div class="title">
        <h1>Data Mahasiswa</h1>
        <a href="/crud/tambah"><button>Tambah Data</button></a>
    </div>

    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Prodi</th>
                <th>Universitas</th>
                <th>No HP</th>
                <th>Action</th>
            </tr>
            <?php 
            if (empty($mahasiswa))  { ?>
                
                <tr>
                    <td colspan="7">Tidak ada data</td>
                </tr>
                <?php } else{
                    $i = 1;
                    foreach ($mahasiswa as $a) { ?>
                       
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $a['nama']; ?></td>
                            <td><?= $a['nim']; ?></td>
                            <td><?= $a['prodi']; ?></td>
                            <td><?= $a['universitas']; ?></td>
                            <td><?= $a['nomor_handphone']; ?></td>
                            <td class="action">
                                <a href="crud/hapus/<?= $a['nim']; ?>"><button class="btn btn-danger btn-delete" onclick="return confirm('Yakin Lu mau hapus data mahasiswa  <?= $a['nama'] ?>?')">Delete</button></a>
                                <a href="crud/edit<?= $a['nim']; ?>"><button class="btn btn-warning btn-update">Edit</button></a>
                            </td>
                        </tr>
                 <?php   }
                } ?>
        </table>
    </div>
</main>

<?= $this->endSection(); ?>
<!-- <tr>
    <td>1</td>
    <td>Fajar</td>
    <td>083087823</td>
    <td>Teknik Informatika</td>
    <td>Unissula</td>
    <td>13312313131</td>
    <td class="action">
        <a href="#"><button class="btn btn-delete">Delete</button></a>
         <a href="#"><button class="btn btn-update">Update</button></a>
    </td>
</tr> -->