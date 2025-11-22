<!-- Banner de borde a borde -->
<style>
 /* ======================================= */
/* BANNER FULL ANCHO RESPONSIVO           */
/* ======================================= */

.banner {
    width: 100%;
    height: 700px;
    background-image: url('<?= base_url("images/banner/banner.jpg") ?>');
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;

    color: white;
    font-size: 36px;
    font-weight: bold;
    padding: 20px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);

    box-sizing: border-box; /* ✅ agrega esto */
}


/* Tablet */
@media (max-width: 992px) {
    .banner {
        height: 700px;
        font-size: 30px;
    }
}

/* Celular */
@media (max-width: 600px) {
    .banner {
        height: 500px;
        font-size: 24px;
        padding: 10px;
    }
}

/* ======================================= */
/* CARRUSEL RESPONSIVO + TOUCH + DRAG     */
/* ======================================= */

.carousel {
    display: flex;
    overflow-x: auto;
    gap: 20px;
    margin-top: 40px;
    scroll-behavior: smooth;

    cursor: grab;
    user-select: none;
    padding: 10px;

    /* para celular: scroll suave */
    -webkit-overflow-scrolling: touch;
}

.carousel::-webkit-scrollbar {
    display: none; /* Oculta barra en móvil y PC */
}

.carousel-item {
    flex: 0 0 auto;
    width: 200px;
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.carousel-item img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    pointer-events: none;
}

/* Celular: items más pequeños */
@media (max-width: 600px) {
    .carousel-item {
        width: 140px;
        height: 80px;
    }
}

/* ======================================= */
/* SECCIÓN PRODUCTOS (Responsivo)         */
/* ======================================= */

.section-productos {
    text-align: center;
    padding: 10px 3px;
    background: #ffffff;
}

.section-productos h2 {
    font-size: 52px;
    font-weight: 900;
    margin-bottom: 10px;
    color: #1a1a1a;
}

.section-productos p {
    font-size: 20px;
    color: #666;
    margin-bottom: 40px;
}

/* Tablet */
@media (max-width: 992px) {
    .section-productos h2 {
        font-size: 42px;
    }
    .section-productos p {
        font-size: 18px;
    }
}

/* Celular */
@media (max-width: 600px) {
    .section-productos {
        padding: 40px 15px;
    }
    .section-productos h2 {
        font-size: 32px;
    }
    .section-productos p {
        font-size: 16px;
    }
}

/* ======================================= */
/* GALERÍA RESPONSIVA                     */
/* ======================================= */

.galeria-productos {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    max-width: 1200px;
    margin: auto;
}

/* Tablet = 2 columnas */
@media (max-width: 900px) {
    .galeria-productos {
        grid-template-columns: repeat(2, 1fr);
    }
}

/* Celular = 1 columna */
@media (max-width: 600px) {
    .galeria-productos {
        grid-template-columns: repeat(1, 1fr);
    }
}

.galeria-item {
    background: #f5f5f5;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
    transition: transform .2s;
}

.galeria-item:hover {
    transform: translateY(-6px);
}

.galeria-item img {
    width: 100%;
    height: 230px;
    object-fit: cover;
}

/* Celular: imágenes más altas */
@media (max-width: 600px) {
    .galeria-item img {
        height: 180px;
    }
}

</style>


<div class="banner">
</div>

<section style="text-align:center; padding:10px 5px; background-color:#f8f8f8;">

<h2 style="font-size:48px; font-weight:900; margin-bottom:20px;">
    HERRAMIENTAS DE CONFIANZA PARA LA INDUSTRIA
</h2>
<p style="font-size:20px; font-weight:400; color:#555;">
    Distribuimos y vendemos productos de alta calidad, importados de los mejores fabricantes del sector metalmecánico.
</p>
<p style="font-size:20px; font-weight:400; color:#555;">
    Contáctanos para asesoría, pedidos y soluciones a medida para tu negocio.
</p>


    <div class="carousel-wrapper">
<div class="carousel">
    <?php 
    for($i=1; $i<=13; $i++): 
    ?>
        <div class="carousel-item">
            <img src="<?= base_url("images/marcas/marca$i.png") ?>" alt="Marca <?= $i ?>">
        </div>
    <?php endfor; ?>

    <!-- Duplicado para generar efecto infinito -->
    <?php 
    for($i=1; $i<=13; $i++): 
    ?>
        <div class="carousel-item">
            <img src="<?= base_url("images/marcas/marca$i.png") ?>" alt="Marca <?= $i ?>">
        </div>
    <?php endfor; ?>
</div>

    </div>
</section>

<section class="section-productos">
<h2>NUESTRA GAMA DE PRODUCTOS</h2>
<p>Ofrecemos venta, importación y distribución de herramientas de alta calidad para el sector metalmecánico.</p>


    <div class="galeria-productos">

        <?php 
        $imagenes = [
            "Ferreteria1.jpg",
            "Ferreteria2.jpg",
            "Ferreteria3.jpg",
            "Ferreteria4.jpg",
            "Ferreteria5.jpg"
        ];

        $slugs = [
            "torno",
            "cepillos",
            "taladro",
            "fresa",
            "brocas"
        ];

        foreach ($imagenes as $index => $img): 
        ?>
            <a href="<?= base_url('index.php/productos/categoria/' . $slugs[$index]) ?>" class="galeria-item">
                <img src="<?= base_url('images/categorias/' . $img) ?>" alt="Producto <?= $index + 1 ?>">
            </a>
        <?php endforeach; ?>

    </div>
</section>

<section style="padding:50px 0; background:#f2f2f2; text-align:center;">
    <h2 style="font-size:40px; font-weight:800; margin-bottom:20px;">
        Nuestra Ubicación
    </h2>
    <p style="font-size:18px; margin-bottom:30px;">
        Av. Argentina 469, Lima 15082 – Perú
    </p>

    <div style="width:100%; max-width:1200px; margin:auto;">
        <iframe 
            width="100%" 
            height="450" 
            style="border:0; border-radius:10px;"
            loading="lazy" 
            allowfullscreen
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps?q=Av.+Argentina+469,+Lima+15082&output=embed">
        </iframe>
    </div>
</section>

<section style="padding:60px 20px; background:white; text-align:center;">
    
    <h2 style="font-size:48px; font-weight:900; margin-bottom:15px;">
        ¿Cómo podemos ayudarte?
    </h2>

    <p style="font-size:20px; color:#555; margin-bottom:40px;">
        Estamos listos para atenderle, póngase en contacto con nosotros.
    </p>

    <form id="form-contacto" style="max-width:800px; margin:auto; text-align:left;">

        <div style="display:flex; gap:40px; margin-bottom:30px;">
            <div style="flex:1;">
                <label style="font-weight:600; margin-bottom:6px; display:block;">Apellidos:</label>
                <input type="text" name="apellidos" required
                style="width:100%; padding:14px; border-radius:8px; border:1px solid #ccc;">
            </div>

            <div style="flex:1;">
                <label style="font-weight:600; margin-bottom:6px; display:block;">Nombres:</label>
                <input type="text" name="nombres" required
                style="width:100%; padding:14px; border-radius:8px; border:1px solid #ccc;">
            </div>
        </div>

        <div style="display:flex; gap:40px; margin-bottom:30px;">
            <div style="flex:1;">
                <label style="font-weight:600; margin-bottom:6px; display:block;">Correo electrónico:</label>
                <input type="email" name="correo" required
                style="width:100%; padding:14px; border-radius:8px; border:1px solid #ccc;">
            </div>

            <div style="flex:1;">
                <label style="font-weight:600; margin-bottom:6px; display:block;">Celular:</label>
                <input type="text" name="celular" required
                style="width:100%; padding:14px; border-radius:8px; border:1px solid #ccc;">
            </div>
        </div>

        <div style="margin-bottom:20px;">
            <label style="font-weight:600;">Mensaje:</label>
            <textarea name="mensaje" rows="5" required
            style="width:100%; padding:12px; border-radius:8px; border:1px solid #ccc; resize:none;"></textarea>
        </div>

        <div style="text-align:center;">
            <button type="submit"
            style="
                background:#e63946;
                color:white;
                padding:14px 40px;
                border:none;
                border-radius:50px;
                font-size:18px;
                font-weight:700;
                cursor:pointer;
                transition:0.3s;
            "
            onmouseover="this.style.background='#c92e3a'"
            onmouseout="this.style.background='#e63946'">
                Enviar mensaje
            </button>
        </div>

    </form>

</section>

<script>
document.getElementById("form-contacto").addEventListener("submit", function(e) {
    e.preventDefault();

    // ALERTA EXITOSA
    Swal.fire({
        icon: 'success',
        title: '¡Mensaje enviado!',
        text: 'Nos pondremos en contacto contigo pronto.',
        confirmButtonColor: '#e63946'
    });

    this.reset();
});
</script>





<script>
const slider = document.querySelector('.carousel');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
    isDown = true;
    slider.classList.add('active');
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
});

slider.addEventListener('mouseleave', () => {
    isDown = false;
    slider.classList.remove('active');
});

slider.addEventListener('mouseup', () => {
    isDown = false;
    slider.classList.remove('active');
});

slider.addEventListener('mousemove', (e) => {
    if(!isDown) return;
    e.preventDefault(); // Esto evita la selección por defecto
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 2; // velocidad del scroll
    slider.scrollLeft = scrollLeft - walk;
});

// LOOP INFINITO AUTOMÁTICO PARA EL ARRASTRE
slider.addEventListener('scroll', () => {
    const maxScroll = slider.scrollWidth / 2; // mitad (porque duplicamos)
    
    if (slider.scrollLeft >= maxScroll) {
        slider.scrollLeft = 1; // reinicia apenas pasa la mitad
    } 
    else if (slider.scrollLeft <= 0) {
        slider.scrollLeft = maxScroll - 1; // si va muy atrás
    }
});

</script>

<script>
const carousel = document.querySelector(".carousel");

let isDown = false;
let startX;
let scrollLeft;

carousel.addEventListener("mousedown", (e) => {
    isDown = true;
    carousel.classList.add("active");
    startX = e.pageX - carousel.offsetLeft;
    scrollLeft = carousel.scrollLeft;
});

carousel.addEventListener("mouseleave", () => {
    isDown = false;
    carousel.classList.remove("active");
});

carousel.addEventListener("mouseup", () => {
    isDown = false;
    carousel.classList.remove("active");
});

carousel.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - carousel.offsetLeft;
    const walk = (x - startX) * 2;
    carousel.scrollLeft = scrollLeft - walk;
});

/* Touch (celular) */
carousel.addEventListener("touchstart", (e) => {
    startX = e.touches[0].pageX - carousel.offsetLeft;
    scrollLeft = carousel.scrollLeft;
});

carousel.addEventListener("touchmove", (e) => {
    const x = e.touches[0].pageX - carousel.offsetLeft;
    const walk = (x - startX) * 2;
    carousel.scrollLeft = scrollLeft - walk;
});
</script>
