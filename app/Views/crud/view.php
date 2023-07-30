<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<style>
.title a button {
  font-size: 20px;
}
</style>
<main>
  <div class="title">
    <h1>Data Students</h1>
    <a href="crud/tambah"><button>Tambah Data</button></a>
  </div>

  <div class="table">
    <table border="1" cellspacing="0" cellpadding="10">
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
      </tr>
      <?php 
            if (empty($students))  { ?>

      <tr>
        <td colspan="7">Tidak ada data</td>
      </tr>
      <?php } else{
                    $i = 1;
                    foreach ($students as $a) { ?>

      <tr>
        <td><?= $i++; ?></td>
        <td><?= $a['id']; ?></td>
        <td><?= $a['name']; ?></td>
        <td><?= $a['email']; ?></td>
        <td><?= $a['phone']; ?></td>
        <td class="action">
          <a href="crud/hapus/<?= $a['id']; ?>"><button class="btn btn-danger btn-delete"
              onclick="return confirm('Are you sure want to delete id <?= $a['id'] ?>?')">Delete</button></a>
          <a href="crud/edit/<?= $a['id']; ?>"><button class="btn btn-warning btn-update">Edit</button></a>
        </td>
      </tr>
      <?php   }
                } ?>
    </table>
  </div>
</main>

<?= $this->endSection(); ?>

