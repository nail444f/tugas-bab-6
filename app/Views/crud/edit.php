<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<style>
.tebal {
  font-size: 15px;
  font-weight: bold;
}

.tebal label {
  font-size: 13px;
}
</style>


<main>
  <div class="title">
    <h5 style="font-weight: bold;">
      Edit Data Mahasiswa
    </h5>
  </div>

  <div class="form">
    <form action="/crud/editan" method="POST">
      <!--  Mengedit NIM -->
      <div class="input">
        <label for="nim">Nim</label>
        <input type="text" name="nim" id="nim" value="<?= $edit['nim']; ?>">
      </div>
      <div class="input tebal">
        <label for="nim">Nim yang baru</label>
        <input type="text" name="newNim" id="nim">
      </div>
      <!--  Mengedit Nama -->
      <div class="input">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="<?= $edit['nama']; ?>">
      </div>
      <div class="input tebal">
        <label for="nama">Nama yang baru</label>
        <input type="text" name="newNama" id="nama">
      </div>
      <!--  Mengedit prodi -->
      <div class="input">
        <label for="prodi">Prodi</label>
        <input type="text" name="prodi" id="prodi" value="<?= $edit['prodi']; ?>">
      </div>
      <div class="input tebal">
        <label for="nama">Prodi yang baru</label>
        <input type="text" name="newProdi" id="prodi">
      </div>
      <!--  Mengedit univ -->
      <div class="input">
        <label for="univ">Universitas</label>
        <input type="text" name="universitas" id="universitas" value="<?= $edit['universitas']; ?>">
      </div>
      <div class=" input tebal">
        <label for="universitas">Universitas yang baru</label>
        <input type="text" name="newUniversitas" id="universitas">
      </div>
      <!--  Mengedit N0 hp -->
      <div class="input">
        <label for="nomor_handphone">No HP</label>
        <input type="text" name="nomor_handphone" id="nomor_handphone" value="<?= $edit['nomor_handphone']; ?>">
      </div>
      <div class=" input tebal">
        <label for="nomor_handphone">No HP yang baru</label>
        <input type="text" name="newNomor_handphone" id="nomor_handphone">
      </div>
      <div class="button">
        <button type="submit" value="Submit">Submit</button>
      </div>
    </form>
  </div>
</main>

<?= $this->endSection(); ?>