<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Footer</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
}

/* FOOTER */
footer {
    background-color: #333;
    color: white;
    padding: 40px 50px;
}

/* TOP */
.footer-top {
    display: flex;
    justify-content: space-between;
    gap: 50px;
    flex-wrap: wrap;
}

.footer-left {
    flex: 1;
    max-width: 400px;
}

.footer-left .logo img {
    max-width: 100%;
    width: 300px;
    height: auto;
    margin-bottom: 15px;
}

.footer-left p {
    margin: 6px 0;
    font-size: 14px;
}

/* RIGHT */
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
    margin-bottom: 4px;
}

.footer-products .columna a:hover {
    background-color: #fff;
    color: #000;
    border-radius: 3px;
    padding: 2px 4px;
    transition: 0.3s;
}

/* BOTTOM */
.footer-bottom {
    border-top: 1px solid #444;
    margin-top: 30px;
    padding-top: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;
    font-size: 13px;
}

/* SOCIAL */
.social-icons {
    display: flex;
    gap: 10px;
}

.social-icons a {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 18px;
    text-decoration: none;
    transition: 0.3s;
}

.social-icons a.facebook { background-color: #1877F2; }
.social-icons a.twitter { background-color: #1DA1F2; }
.social-icons a.instagram {
    background: linear-gradient(45deg, #feda75, #d62976, #962fbf, #4f5bd5);
}
.social-icons a.youtube { background-color: #FF0000; }
.social-icons a.whatsapp { background-color: #25D366; }
.social-icons a.tiktok {
    background: linear-gradient(45deg, #25F4EE, #FE2C55);
}

.social-icons a:hover {
    transform: scale(1.15);
    filter: brightness(1.15);
}

/* RESPONSIVE */
@media (max-width: 768px) {
    footer {
        padding: 30px 20px;
    }

    .footer-top {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .footer-products {
        justify-content: center;
    }

    .footer-bottom {
        flex-direction: column;
        text-align: center;
    }

    .footer-left .logo img {
        width: 200px;
    }
}

/* BOTÓN WHATSAPP */
.whatsapp-float {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #25D366;
    color: white;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.3);
    z-index: 9999;
    text-decoration: none;
}

.whatsapp-float:hover {
    transform: scale(1.1);
}
</style>
</head>

<body>

<footer>
    <div class="footer-top">
        <div class="footer-left">
            <div class="logo">
                <img src="<?= base_url('images/logo/logo.png') ?>" alt="Logo">
            </div>
            <p>Ventas, importación y distribución de herramientas para la industria metalmecánica</p>
            <p>+51 972 156 330</p>
            <p>+51 902 258 983</p>
            <p>Av. Argentina 469, Lima 15082</p>
        </div>

        <div class="footer-right">
            <h3>Productos</h3>
            <div class="footer-products">
                <?php foreach ($menu as $categoria => $productos): ?>
                    <div class="columna">
                        <h4><?= $categoria ?></h4>
                        <?php foreach ($productos as $p): ?>
                            <a href="<?= base_url('productos/ver/' . $p['id']); ?>">
                                <?= $p['nombre'] ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>© 2025 FERRETERÍA MAYTA - Todos los derechos reservados.</p>

        <div class="social-icons">
            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
            <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
            <a href="#" class="tiktok"><i class="fab fa-tiktok"></i></a>
        </div>
    </div>
</footer>

<a href="https://wa.me/51972156330" target="_blank" class="whatsapp-float">
    <i class="fab fa-whatsapp"></i>
</a>

</body>
</html>
