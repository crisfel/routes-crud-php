<h1>Lista de Usuarios</h1>
<a href="http://127.0.0.1/crud-manual/users/create">Crear Usuario</a>
<ul>
    <?php foreach ($users as $user): ?>
        <li><?= htmlspecialchars($user['name']) ?> (<?= htmlspecialchars($user['email']) ?>)</li>
    <?php endforeach; ?>
</ul>