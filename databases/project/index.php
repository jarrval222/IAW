<?php
include 'config.php'; // Conecta a la DB

// --- LÓGICA DE ACCIONES (POST y GET) ---
if (isset($_POST['add_org'])) {
    $pdo->prepare("INSERT INTO organizers (name, email, phone) VALUES (?,?)")->execute([$_POST['name'], $_POST['email'], $_POST['phone']]);
}
if (isset($_POST['add_event'])) {
    $pdo->prepare("INSERT INTO events (name, date, id_organizer) VALUES (?,?,?)")->execute([$_POST['name'], $_POST['date'], $_POST['id_org']]);
}
if (isset($_POST['add_att'])) {
    $pdo->prepare("INSERT INTO attendees (name, id_event) VALUES (?,?)")->execute([$_POST['name'], $_POST['id_event']]);
}
if (isset($_GET['del_event'])) {
    $pdo->prepare("DELETE FROM events WHERE id_event = ?")->execute([$_GET['del_event']]);
}
if (isset(_POST['button_name'])){
    pdo->prepare("in/up/del into/from table ") -> execute([_POST/_GET['']]);
}

// Consulta de Eventos con su Organizador (Punto 3.1 de la imagen)
$eventos = $pdo->query("SELECT e.*, o.name as org_name FROM events e JOIN organizers o ON e.id_organizer = o.id_organizer")->fetchAll();
$orgs = $pdo->query("SELECT * FROM organizers")->fetchAll();
?>

<!DOCTYPE html>
<html>
<head><title>Sistema Simple</title></head>
<body>
    <h1>Gestión de Eventos</h1>

    <section>
        <h3>1. Agregar Organizador</h3>
        <form method="POST">
            <input type="text" name="name" placeholder="Nombre" required>
            <input type="email" name="email" placeholder="Email">
            <input type="tel" name="phone" placeholder="Phone">
            <button name="add_org">Guardar</button>
        </form>

        <h3>2. Crear Evento</h3>
        <form method="POST">
            <input type="text" name="name" placeholder="Nombre Evento" required>
            <input type="date" name="date" required>
            <select name="id_org">
                <?php foreach($orgs as $o) echo "<option value='{$o['id_organizer']}'>{$o['name']}</option>"; ?>
            </select>
            <button name="add_event">Crear</button>
        </form>

        <h3>3. Registrar Asistente</h3>
        <form method="POST">
            <input type="text" name="name" placeholder="Nombre Asistente" required>
            <select name="id_event">
                <?php foreach($eventos as $e) echo "<option value='{$e['id_event']}'>{$e['name']}</option>"; ?>
            </select>
            <button name="add_att">Registrar</button>
        </form>
    </section>

    <hr>

    <h2>Lista de Eventos y Organizadores</h2>
    <table border="1">
        <tr><th>Evento</th><th>Fecha</th><th>Organizador</th><th>Acción</th></tr>
        <?php foreach($eventos as $e): ?>
        <tr>
            <td><?= $e['name'] ?></td>
            <td><?= $e['date'] ?></td>
            <td><?= $e['org_name'] ?></td>
            <td><a href="?del_event=<?= $e['id_event'] ?>">Eliminar</a></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h3>Asistentes por Evento</h3>
    <?php foreach($eventos as $e): ?>
        <strong><?= $e['name'] ?>:</strong>
        <?php 
        $atts = $pdo->prepare("SELECT * FROM attendees WHERE id_event = ?");
        $atts->execute([$e['id_event']]);
        while($a = $atts->fetch()) echo $a['name'] . ", ";
        echo "<br>";
        ?>
    <?php endforeach; ?>

</body>
</html>