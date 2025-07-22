<?php include 'includes/templates/header.php'; ?>

    <main class="contenedor seccion">
        <h1>Conoce sobre nosotros</h1>
        
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="sobre nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit perspiciatis dolorum quod explicabo, dolorem esse praesentium delectus doloribus laudantium nam maxime, quidem veritatis, officia non! Quod sequi libero accusantium amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, iste maiores magni iure quia cum neque, totam quisquam vel voluptatem officia quas molestias laboriosam. Dolorum enim eos facilis adipisci veniam.</p>

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid perferendis ducimus porro cum aliquam aut quibusdam, provident ex nihil facere, veritatis ipsum eos doloremque nulla similique quo aspernatur totam adipisci.</p>
            </div>

        </div>
    </main>
    <section class="contenedor seccion">
        <h1>Mas sobre nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>seguridad</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis ipsam fuga blanditiis optio veritatis necessitatibus soluta perspiciatis exercitationem quisquam molestiae? Nostrum sunt voluptatum vero doloremque, possimus quasi cumque temporibus tenetur.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis ipsam fuga blanditiis optio veritatis necessitatibus soluta perspiciatis exercitationem quisquam molestiae? Nostrum sunt voluptatum vero doloremque, possimus quasi cumque temporibus tenetur.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A tiempo</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis ipsam fuga blanditiis optio veritatis necessitatibus soluta perspiciatis exercitationem quisquam molestiae? Nostrum sunt voluptatum vero doloremque, possimus quasi cumque temporibus tenetur.</p>
            </div>
        </div>
    </section>

    
    <footer class="footer section">

        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </div>
        <p class="copyright">Todos los derechos reservados 2021 &copy;</p>
    </footer>

    <script src="build/js/bundle.min.js" ></script>
</body>
</html>