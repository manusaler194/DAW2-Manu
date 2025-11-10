<?php
session_start();

if (!isset($_SESSION['usuario']) || time() > $_SESSION['caduca']) {
    session_destroy();
    header("Location: index.php");
    exit;
}

$usuario = $_SESSION['usuario'];
$rol = $_SESSION['rol'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Menú</title>
</head>
<body>
<h1>Bienvenido <?= htmlspecialchars($usuario) ?></h1>
<a href="logout.php">Logout</a>
<hr>

<?php if ($rol === 'ROLE_ALUMNO'): ?>
    <p>Eres un <strong>ALUMNO</strong>. Estas son tus asignaturas:</p>
    <ul>
        <li>Matemáticas</li>
        <li>Lengua</li>
        <li>Programación</li>
    </ul>
<?php else: ?>
    <p>Eres un <strong>PROFESOR</strong>. Tu menú:</p>
    <ul>
        <li>Gestión de cursos</li>
        <li>Evaluación de alumnos</li>
    </ul>
<?php endif; ?>

</body>
</html>
