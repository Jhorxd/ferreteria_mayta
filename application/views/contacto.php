
<style>
     /* ======================================= */
/* BANNER FULL ANCHO RESPONSIVO           */
/* ======================================= */
.banner {
    width: 100%;
    height: 700px;
    background-image: url('<?= base_url("images/banner/contacto.jpg") ?>');
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

    box-sizing: border-box;
}

/* Tablet y celular → esconder banner */
@media (max-width: 992px) {
    .banner {
        display: none !important;
    }
}


.video-section {
    width: 100%;
    display: flex;
    justify-content: center;
    margin: 60px 0;
}

.video-section video {
    width: 70%;
    max-width: 900px;
    height: auto;

    border-radius: 16px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.25);
    background: black;
}

/* Tablet */
@media (max-width: 992px) {
    .video-section video {
        width: 90%;
    }
}

/* Celular */
@media (max-width: 576px) {
    .video-section {
        padding: 0;
        margin: 30px 0;
    }

    .video-section video {
        width: 92%;
        max-width: 92%;
        border-radius: 12px;
    }}




</style>

<div class="banner">
</div>

<div class="video-section">
    <video controls autoplay muted playsinline>
        <source src="<?= base_url('videos/contacto.mp4') ?>" type="video/mp4">
        Tu navegador no soporta video HTML5.
    </video>
</div>




<section style="padding:60px 20px; background:white; text-align:center;">
    
    <h2 style="font-size:48px; font-weight:900; margin-bottom:15px;">
        ¿Cómo podemos ayudarte?
    </h2>

    <p style="font-size:20px; color:#555; margin-bottom:40px;">
        Estamos listos para atenderle, póngase en contacto con nosotros.
    </p>

    <form id="form-contacto" method="POST" style="max-width:800px; margin:auto; text-align:left;">

        <div style="display:flex; gap:40px; margin-bottom:30px;">
            <div style="flex:1;">
                <label style="font-weight:600; margin-bottom:6px; display:block;">Apellidos:</label>
                <input type="text" name="apellidos" required
                style="width:90%; padding:14px; border-radius:8px; border:1px solid #ccc;">
            </div>

            <div style="flex:1;">
                <label style="font-weight:600; margin-bottom:6px; display:block;">Nombres:</label>
                <input type="text" name="nombres" required
                style="width:90%; padding:14px; border-radius:8px; border:1px solid #ccc;">
            </div>
        </div>

        <div style="display:flex; gap:40px; margin-bottom:30px;">
            <div style="flex:1;">
                <label style="font-weight:600; margin-bottom:6px; display:block;">Correo electrónico:</label>
                <input type="email" name="correo" required
                style="width:90%; padding:14px; border-radius:8px; border:1px solid #ccc;">
            </div>

            <div style="flex:1;">
                <label style="font-weight:600; margin-bottom:6px; display:block;">Celular:</label>
                <input type="text" name="celular" required
                style="width:90%; padding:14px; border-radius:8px; border:1px solid #ccc;">
            </div>
        </div>


        <div style="margin-bottom:20px;">
            <label style="font-weight:600;">Mensaje:</label>
            <textarea name="mensaje" rows="5" required
            style="width:90%; padding:12px; border-radius:8px; border:1px solid #ccc; resize:none;"></textarea>
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
document.getElementById("form-contacto").addEventListener("submit", function(e){
    e.preventDefault();

    let datos = new FormData(this);

    fetch("enviar_contacto.php", {
        method: "POST",
        body: datos
    })
    .then(res => res.text())
    .then(data => {

        // Si el PHP devuelve "Mensaje enviado correctamente."
        if (data.includes("correctamente")) {

            Swal.fire({
                icon: 'success',
                title: '¡Mensaje enviado!',
                text: 'Nos pondremos en contacto contigo pronto.',
                confirmButtonColor: '#e63946'
            });

            // Reset form
            document.getElementById("form-contacto").reset();

        } else {
            // Si PHP devolvió error
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: data,
                confirmButtonColor: '#e63946'
            });
        }

    })
    .catch(err => {
        Swal.fire({
            icon: 'error',
            title: 'Error en la conexión',
            text: 'No se pudo enviar el mensaje.',
            confirmButtonColor: '#e63946'
        });
    });
});
</script>
