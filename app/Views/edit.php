<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
<body>
    <h1>Edit Siswa</h1>
    <form method="post" action="/students/update">
        <input type="hidden" name="id" value="<?= $student['id']; ?>">
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" value="<?= $student['name']; ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $student['email']; ?>" required>
        <br>
        <label for="phone">No. Telepon:</label>
        <input type="text" name="phone" id="phone" value="<?= $student['phone']; ?>" required>
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
