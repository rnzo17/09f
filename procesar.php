<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h1>Formulario Procesado</h1>";
    echo "<p>Nombre: " . $_POST["nombre"] . "</p>";
    echo "<p>Apellido: " . $_POST["apellido"] . "</p>";
    echo "<p>Opción seleccionada: " . $_POST["opcion"] . "</p>";
    echo "<p>Checkbox seleccionado: " . (isset($_POST["checkbox"]) ? "Sí" : "No") . "</p>";
    echo "<p>Texto: " . $_POST["texto"] . "</p>";
    echo "<p>País seleccionado: " . $_POST["pais"] . "</p>";
}
?>
