<!DOCTYPE html>
<html>
<head>
    <title>Usuarios</title>
    <link rel="stylesheet" href="estilos.css?v=2">
</head>
<body>

<?php
include("conexion.php");
$result = $conexion->query("SELECT * FROM usuarios");
?>

<div class="table-container">

    <div class="table-header">
        <h2>👥 Usuarios</h2>
        <a href="agregar.php" class="btn-add">➕ Nuevo Usuario</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
        <?php while($row = $result->fetch_assoc()){ ?>
            <tr>
                <td>#<?php echo $row['id']; ?></td>

                <td class="user-name">
                    <?php echo $row['nombre']; ?>
                </td>

                <td>
                    <span class="email">
                        <?php echo $row['correo']; ?>
                    </span>
                </td>

                <td class="actions">
                    <a href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn-delete">🗑 Eliminar</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>

    </table>

</div>

</body>
</html>