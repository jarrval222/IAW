<?php
include 'config.php';
$db = "project";
$pdo->exec("USE $db");

if (isset($_POST['save'])) {
    if ($_POST['id']) {
        $stmt = $pdo->prepare("UPDATE events SET name=?, date=?, location=?, id_organizer=? WHERE id_event=?");
        $stmt->execute([$_POST['name'], $_POST['date'], $_POST['location'], $_POST['id_organizer'], $_POST['id']]);
    } else {
        $stmt = $pdo->prepare("INSERT INTO events (name, date, location, id_organizer) VALUES (?, ?, ?, ?)");
        $stmt->execute([$_POST['name'], $_POST['date'], $_POST['location'], $_POST['id_organizer']]);
    }
    header("Location: eventos.php");
}

if (isset($_GET['delete'])) {
    $pdo->prepare("DELETE FROM events WHERE id_event=?")->execute([$_GET['delete']]);
    header("Location: eventos.php");
}

$edit_data = null;
if (isset($_GET['edit'])) {
    $stmt = $pdo->prepare("SELECT * FROM events WHERE id_event=?");
    $stmt->execute([$_GET['edit']]);
    $edit_data = $stmt->fetch();
}

// Consultas y Filtros (Punto 3.1 y 3.3)
$query = "SELECT events.*, organizers.name as org_name FROM events LEFT JOIN organizers ON events.id_organizer = organizers.id_organizer";
if (!empty($_GET['f_date'])) {
    $query .= " WHERE events.date = " . $pdo->quote($_GET['f_date']);
}
$events = $pdo->query($query)->fetchAll();
$organizers = $pdo->query("SELECT * FROM organizers")->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Eventos</title>
</head>
<body class="container mt-4">
    <a href="index.php" class="btn btn-secondary mb-3">Volver</a>
    <h2>Gestión de Eventos</h2>

    <form method="POST" class="row g-2 mb-4 p-3 border rounded bg-light shadow-sm">
        <input type="hidden" name="id" value="<?= $edit_data['id_event'] ?? '' ?>">
        <div class="col-md-3"><input type="text" name="name" class="form-control" placeholder="Nombre Evento" value="<?= $edit_data['name'] ?? '' ?>" required></div>
        <div class="col-md-2"><input type="date" name="date" class="form-control" value="<?= $edit_data['date'] ?? '' ?>" required></div>
        <div class="col-md-3"><input type="text" name="location" class="form-control" placeholder="Ubicación" value="<?= $edit_data['location'] ?? '' ?>"></div>
        <div class="col-md-2">
            <select name="id_organizer" class="form-control" required>
                <option value="">Organizador...</option>
                <?php foreach($organizers as $o): ?>
                    <option value="<?= $o['id_organizer'] ?>" <?= (isset($edit_data) && $edit_data['id_organizer'] == $o['id_organizer']) ? 'selected' : '' ?>><?= $o['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-md-2"><button name="save" class="btn btn-success w-100">Guardar</button></div>
    </form>

    <form method="GET" class="mb-3 d-flex gap-2">
        <input type="date" name="f_date" class="form-control w-25">
        <button type="submit" class="btn btn-dark">Filtrar por Fecha</button>
        <a href="eventos.php" class="btn btn-outline-secondary">Limpiar</a>
    </form>

    <table class="table table-striped">
        <thead class="table-dark"><tr><th>Evento</th><th>Fecha</th><th>Lugar</th><th>Organizador</th><th>Acciones</th></tr></thead>
        <tbody>
            <?php foreach($events as $e): ?>
            <tr>
                <td><?= $e['name'] ?></td>
                <td><?= $e['date'] ?></td>
                <td><?= $e['location'] ?></td>
                <td><?= $e['org_name'] ?></td>
                <td>
                    <a href="?edit=<?= $e['id_event'] ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="?delete=<?= $e['id_event'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Borrar?')">Borrar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>