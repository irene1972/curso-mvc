<!--<h1>< ?php echo $todos_los_usuarios ?></h1>
<h1>< ?= $todos_los_usuarios ?></h1>-->

<h1>Listado de Usuarios:</h1>
<!-- fetch_object saca una array de objetos -->
<?php while($usuario = $todos_los_usuarios->fetch_object()): ?>
  <?= $usuario->email?> - <?= $usuario->fecha?><br/>
<?php endwhile; ?>