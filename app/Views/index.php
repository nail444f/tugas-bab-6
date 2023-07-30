<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <a href="/students/create">Tambah Siswa</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No. Telepon</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?= $student['id']; ?></td>
            <td><?= $student['name']; ?></td>
            <td><?= $student['email']; ?></td>
            <td><?= $student['phone']; ?></td>
            <td>
                <a href="/students/edit/<?= $student['id']; ?>">Edit</a>
                <a href="/students/delete/<?= $student['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
