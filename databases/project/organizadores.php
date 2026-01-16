<?php
include 'config.php';
$pdo->exec("USE $db");

// Acciones: Crear, Editar, Eliminar
if (isset($_POST['save'])) {
    if ($_POST['id']) {
        $stmt = $pdo->prepare("UPDATE organizers SET name=?, email=?, phone=? WHERE id_organizer=?");
        $stmt->execute([$_POST['name'], $_POST['email'], $_POST['phone'], $_POST['id']]);
    } else {
        $stmt = $pdo->prepare("INSERT INTO organizers (name, email, phone) VALUES (?, ?, ?)");
        $stmt->execute([$_POST['name'], $_POST['email'], $_POST['phone']]);
    }
    header("Location: organizadores.php");
}

if (isset($_GET['delete'])) {
    $pdo->prepare("DELETE FROM organizers WHERE id_organizer=?")->execute([$_GET['delete']]);
    header("Location: organizadores.php");
}

$edit_data = null;
if (isset($_GET['edit'])) {
    $stmt = $pdo->prepare("SELECT * FROM organizers WHERE id_organizer=?");
    $stmt->execute([$_GET['edit']]);
    $edit_data = $stmt->fetch();
}

$list = $pdo->query("SELECT * FROM organizers")->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Organizadores</title>
</head>
<body class="container mt-4">
    <a href="index.php" class="btn btn-secondary mb-3">Volver</a>
    <h2><?= $edit_data ? 'Editar' : 'Añadir' ?> Organizador</h2>
    
    <form method="POST" class="row g-3 mb-5 border p-3 rounded bg-white">
        <input type="hidden" name="id" value="<?= $edit_data['id_organizer'] ?? '' ?>">
        <div class="col-md-4"><input type="text" name="name" class="form-control" placeholder="Nombre" value="<?= $edit_data['name'] ?? '' ?>" required></div>
        <div class="col-md-4"><input type="email" name="email" class="form-control" placeholder="Email" value="<?= $edit_data['email'] ?? '' ?>"></div>
        <div class="col-md-2"><input type="text" name="phone" class="form-control" placeholder="Teléfono" value="<?= $edit_data['phone'] ?? '' ?>"></div>
        <div class="col-md-2"><button name="save" class="btn btn-primary w-100">Guardar</button></div>
    </form>

    <table class="table table-hover">
        <thead class="table-dark"><tr><th>ID</th><th>Nombre</th><th>Email</th><th>Teléfono</th><th>Acciones</th></tr></thead>
        <tbody>
            <?php foreach($list as $o): ?>
            <tr>
                <td><?= $o['id_organizer'] ?></td>
                <td><?= $o['name'] ?></td>
                <td><?= $o['email'] ?></td>
                <td><?= $o['phone'] ?></td>
                <td>
                    <a href="?edit=<?= $o['id_organizer'] ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="?delete=<?= $o['id_organizer'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar?')">Borrar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>