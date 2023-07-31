<!DOCTYPE html>
<html>
<head>
    <title>Proyecto Ejemplo</title>
</head>
<body>
    <h1>Página Index</h1>
    <p>Enlace con parámetros:</p>
    <a href="procesar.php?nombre=Diego&apellido=Forlan">Enviar parámetros</a>

    <h2>Formulario</h2>
    <form action="procesar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
        <br>

        <label>Radio button:</label>
        <input type="radio" id="opcion1" name="opcion" value="Opción 1">
        <label for="opcion1">Opción 1</label>
        <input type="radio" id="opcion2" name="opcion" value="Opción 2">
        <label for="opcion2">Opción 2</label>
        <br>

        <label>Checkbox:</label>
        <input type="checkbox" id="checkbox1" name="checkbox[]" value="Opción 1">
        <label for="checkbox1">Opción 1</label>
        <input type="checkbox" id="checkbox2" name="checkbox[]" value="Opción 2">
        <label for="checkbox2">Opción 2</label>
        <br>

        <label for="texto">Textarea:</label>
        <textarea id="texto" name="texto" rows="4" cols="50"></textarea>
        <br>

        <label for="pais">País:</label>
        <select id="pais" name="pais">
            <option value="Argentina">Argentina</option>
            <option value="Brasil">Brasil</option>
            <option value="Chile">Chile</option>
            <!-- Puedes agregar más opciones aquí -->
        </select>
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
