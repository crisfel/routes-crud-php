<h1>Usuarios</h1>
<a href="/crud-manual/users/create">Crear Usuario</a>
<table>
    <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['phone'] ?></td>
            <td>
                <a href="/crud-manual/users/<?= $user['id'] ?>/edit">Editar</a>
                <form method="POST" action="/crud-manual/users/<?= $user['id'] ?>/delete" style="display:inline;">
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>