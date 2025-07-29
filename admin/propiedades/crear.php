<?php 
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin" class="boton boton-verde">Volver</a>

        <form class="formulario" action="">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">titulo: </label>
                <input type="text" id="titulo" placeholder="Titulo propiedad">

                <label for="precio">Precio: </label>
                <input type="number" id="precio" placeholder="precio propiedad">

                <label for="imagen">Imagen: </label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripción: </label>
                <textarea id="descripcion"></textarea>

            </fieldset>

            <fieldset>

                <legend>Informacion Porpiedad</legend>

                <label for="habitaciones">Habitaciones: </label>
                <input type="number" id="habitaciones" placeholder="Ejemplo: 3" min="1" max="9"></input>

                <label for="wc">Baños: </label>
                <input type="number" id="wc" placeholder="Ejemplo: 3" min="1" max="9"></input>

                <label for="estacionamiento">Estacionamiento: </label>
                <input type="number" id="estacionamiento" placeholder="Ejemplo: 3" min="1" max="9"></input>

            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select>
                    <option value="1">Daniel</option>
                    <option value="2">Miriam</option>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>

    </main>
    
<?php 
    incluirTemplate('footer');
?>