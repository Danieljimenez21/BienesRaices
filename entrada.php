<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>


    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracion de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>20/10/2121</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit perspiciatis dolorum quod explicabo, dolorem esse praesentium delectus doloribus laudantium nam maxime, quidem veritatis, officia non! Quod sequi libero accusantium amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, iste maiores magni iure quia cum neque, totam quisquam vel voluptatem officia quas molestias laboriosam. Dolorum enim eos facilis adipisci veniam.</p>

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid perferendis ducimus porro cum aliquam aut quibusdam, provident ex nihil facere, veritatis ipsum eos doloremque nulla similique quo aspernatur totam adipisci.</p>
        </div>
    </main>
    
<?php 
    incluirTemplate('footer');
?>