<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
</head>
<body>
    <h1>Tambah Siswa</h1>
    <form method="post" action="/students/store">
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="phone">No. Telepon:</label>
        <input type="text" name="phone" id="phone" required>
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
