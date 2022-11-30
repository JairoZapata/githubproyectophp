<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>	
<?php require_once 'includes/lateral.php'; ?>
<?php require_once 'includes/conexion.php'; ?>

<?php
$consulta = "SELECT * FROM genero"; 
$datos = mysqli_query($db,$consulta);
$fila= mysqli_fetch_array($datos);
?>

<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Crear paciente</h1>
	
	<br/>
	

    <form action="guardar-paciente.php" method="POST">
        <tr>
            <td>
                <label for="numero">Numero Documento:</label>
                <input type="number" name="numero" id="numero">
            </td>
            <td>
                <label for="nombre1">Nombre 1:</label>
                <input type="text" name="nombre1" id="nombre1">
            </td>
            <td>
                <label for="nombre2">Nombre 2:</label>
                <input type="text" name="nombre2" id="nombre2">
            </td>
            <td>
                <label for="apellido1">Apellido 1:</label>
                <input type="text" name="apellido1" id="apellido1">
            </td>
            <td>
                <label for="apellido2">Apellido 2:</label>
                <input type="text" name="apellido2" id="apellido2">
            </td>
            <td>
                <label for="genero">Genero:</label>
                <select id="cars">
                    <?php for ($i=0; $i <= $fila; $i++): ?>
                        <option value="volvo"><?= $i ?></option>
                    <?php endfor; ?>
                </select>
            </td>
        </tr>
    </form>

</div> <!--fin principal-->

<?php require_once 'includes/pie.php'; ?>