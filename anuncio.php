<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                        <p>4</p>
                    </li>
                </ul>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit perspiciatis dolorum quod explicabo, dolorem esse praesentium delectus doloribus laudantium nam maxime, quidem veritatis, officia non! Quod sequi libero accusantium amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, iste maiores magni iure quia cum neque, totam quisquam vel voluptatem officia quas molestias laboriosam. Dolorum enim eos facilis adipisci veniam.</p>

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid perferendis ducimus porro cum aliquam aut quibusdam, provident ex nihil facere, veritatis ipsum eos doloremque nulla similique quo aspernatur totam adipisci.</p>
                
        </div>
    </main>
    
<?php 
    incluirTemplate('footer');
?>