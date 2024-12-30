<h1>Editar Usuario</h1>
<form method="POST" action="/crud-manual/users/<?= $user['id'] ?>/update">
    <label>Nombre: <input type="text" name="name" value="<?= $user['name'] ?>"></label><br>
    <label>Email: <input type="email" name="email" value="<?= $user['email'] ?>"></label><br>
    <label>Teléfono: <input type="text" name="phone" value="<?= $user['phone'] ?>"></label><br>
    <button type="submit">Actualizar</button>
</form>