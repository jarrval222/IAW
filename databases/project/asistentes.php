<?php
include 'config.php';
$pdo->exec("USE $db");

if (isset($_POST['save'])) {
    if ($_POST['id']) {
        $stmt = $pdo->prepare("UPDATE attendees SET name=?, email=?, phone=?, id_event=? WHERE id_attendee=?");
        $stmt->execute([$_POST['name'], $_POST['email'], $_POST['phone'], $_POST['id_event'], $_POST['id']]);
    } else {
        $stmt = $pdo->prepare("INSERT INTO attendees (name, email, phone, id_event) VALUES (?, ?, ?, ?)");
        $stmt->execute([$_POST['name'], $_POST['email'], $_POST['phone'], $_POST['id_event']]);
    }
    header("Location: asistentes.php");
}

if (isset($_GET['delete'])) {
    $pdo->prepare("DELETE FROM attendees WHERE id_attendee=?")->execute([$_GET['delete']]);
    header("Location: asistentes.php");
}

$edit_data = null;
if (isset($_GET['edit'])) {
    $stmt = $pdo->prepare("SELECT * FROM attendees WHERE id_attendee=?");
    $stmt->execute([$_GET['edit']]);
    $edit_data = $stmt->fetch();
}

$events = $pdo->query("SELECT * FROM events")->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Asistentes</title>
</head>
<body class="container mt-4">
    <a href="index.php" class="btn btn-secondary mb-3">Volver</a>
    <h2>Registro de Asistentes</h2>

    <form method="POST" class="row g-2 mb-5 p-3 border rounded bg-light">
        <input type="hidden" name="id" value="<?= $edit_data['id_attendee'] ?? '' ?>">
        <div class="col-md-3"><input type="text" name="name" class="form-control" placeholder="Nombre Asistente" value="<?= $edit_data['name'] ?? '' ?>" required></div>
        <div class="col-md-3"><input type="email" name="email" class="form-control" placeholder="Email" value="<?= $edit_data['email'] ?? '' ?>"></div>
        <div class="col-md-2"><input type="text" name="phone" class="form-control" placeholder="Teléfono" value="<?= $edit_data['phone'] ?? '' ?>"></div>
        <div class="col-md-2">
            <select name="id_event" class="form-control" required>
                <option value="">Seleccionar Evento...</option>
                <?php foreach($events as $ev): ?>
                    <option value="<?= $ev['id_event'] ?>" <?= (isset($edit_data) && $edit_data['id_event'] == $ev['id_event']) ? 'selected' : '' ?>><?= $ev['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-md-2"><button name="save" class="btn btn-info text-white w-100">Guardar</button></div>
    </form>

    <h3>Listado por Evento (Punto 3.2)</h3>
    <?php foreach($events as $ev): ?>
        <div class="card mb-4">
            <div class="card-header bg-dark text-white d-flex justify-content-between">
                <span>Evento: <strong><?= $ev['name'] ?></strong> (<?= $ev['date'] ?>)</span>
            </div>
            <div class="card-body p-0">
                <table class="table table-sm m-0">
                    <thead><tr><th>Nombre</th><th>Email</th><th>Acciones</th></tr></thead>
                    <tbody>
                    <?php
                    $stmt = $pdo->prepare("SELECT * FROM attendees WHERE id_event = ?");
                    $stmt->execute([$ev['id_event']]);
                    while($row = $stmt->fetch()): ?>
                        <tr>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td>
                                <a href="?edit=<?= $row['id_attendee'] ?>" class="btn btn-link btn-sm p-0 mx-2 text-warning">Editar</a>
                                <a href="?delete=<?= $row['id_attendee'] ?>" class="btn btn-link btn-sm p-0 text-danger">Borrar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endforeach; ?>
</body>
</html>