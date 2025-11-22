<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Footer Ejemplo</title>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
    }

    footer {
        background-color: #333;
        color: white;
        padding: 40px 50px;
        display: flex;
        flex-direction: column;
    }

    .footer-top {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 50px;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }

    .footer-left {
        flex: 1;
        max-width: 400px;
    }

    .footer-left .logo img {
        width: 150px;
        margin-bottom: 15px;
    }

    .footer-left p {
        margin: 5px 0;
        font-size: 14px;
    }

    .footer-right {
        flex: 2;
    }

    .footer-right h3 {
        margin-bottom: 15px;
    }

    .footer-products {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
    }

    .footer-products .columna h4 {
        margin-bottom: 5px;
        font-size: 14px;
    }

    .footer-products .columna a {
        display: block;
        color: #fff;
        text-decoration: none;
        font-size: 13px;
        margin-bottom: 3px;
    }

.footer-products .columna a:hover {
    text-decoration: none; /* o lo dejas si quieres subrayado */
    background-color: #fff; /* fondo blanco */
    color: #000;            /* texto negro */
    padding: 2px 4px;       /* opcional: un poco de espacio para que se vea mejor */
    border-radius: 3px;     /* opcional: bordes redondeados */
    transition: 0.3s;       /* suave transición */
}


.footer-bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-top: 1px solid #444;
    padding-top: 20px;
    flex-wrap: wrap;
    font-size: 13px;
}

.footer-bottom .social-icons {
    display: flex;
    gap: 10px;
}

.footer-bottom .social-icons a {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 35px;
    height: 35px;
    border: 1px solid #fff;
    border-radius: 50%;
    color: #fff;
    text-decoration: none;
    transition: all 0.3s ease;
}

.footer-bottom .social-icons a i {
    font-size: 16px;
}

/* Hover: fondo blanco y texto negro */
.footer-bottom .social-icons a:hover {
    background-color: #fff;
    color: #000;
    transform: scale(1.1);
}

/* Responsive */
@media screen and (max-width: 768px) {
    .footer-top {
        flex-direction: column;
    }

    .footer-right {
        margin-top: 30px;
    }

    .footer-bottom {
        flex-direction: column;
        gap: 10px;
    }

    .footer-bottom .social-icons {
        margin-top: 10px;
    }
}

/* aquí va todo tu CSS del footer y del body */

/* BOTÓN FLOTANTE DE WHATSAPP */
.whatsapp-float {
    position: fixed;      /* fijo en pantalla */
    bottom: 20px;         
    right: 20px;          
    background-color: #25D366;
    color: white;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 30px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.3);
    z-index: 9999;
    text-decoration: none;
    transition: transform 0.3s, box-shadow 0.3s;
}
.whatsapp-float:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 12px rgba(0,0,0,0.4);
}

</style>
</head>



<footer>
    
    <div class="footer-top">
        <div class="footer-left">
            <div class="logo">
                <img src="<?= base_url('images/logo/logo.png') ?>" alt="Logo">
            </div>
            <p>Ventas, importación y distribución de herramientas para la industria de metalmecánica</p>
            <p>+51 981 475 582</p>
            <p>Av. Argentina 469 lima lima, Lima 15082</p>
        </div>

        <div class="footer-right">
            <h3>Productos</h3>
            <div class="footer-products">
                <?php foreach ($menu as $categoria => $productos): ?>
                    <div class="columna">
                        <h4><?= $categoria ?></h4>
                        <?php foreach ($productos as $p): ?>
                            <a href="<?= base_url('index.php/productos/ver/' . $p['id']); ?>" class="item">
                                <?= $p['nombre'] ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<div class="footer-bottom">
    <p>@2024 FERRETERIA MAYTA - Todos los derechos reservados.</p>
    <div class="social-icons">
        <a href="https://www.facebook.com/" class="facebook" target="_blank">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.instagram.com/" class="instagram" target="_blank">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.tiktok.com/" class="tiktok" target="_blank">
            <i class="fab fa-tiktok"></i>
        </a>
    </div>
</div>
</footer>
<!-- BOTÓN FLOTANTE DE WHATSAPP -->
<!-- BOTÓN FLOTANTE DE WHATSAPP -->
<a href="https://wa.me/51981475582" target="_blank" class="whatsapp-float">
    <i class="fab fa-whatsapp"></i>
</a>
</body>
</html>
