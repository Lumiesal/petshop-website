<?php include("template/header.php"); ?>
    <main id="main" class="trabaja">
        <section class="section1 banner">
            <div class="container-banner-contact">
                <div class="item"><img src="images/banner-trabaja.jpg" alt="slider-1"></div>
            </div>
        </section>
        <section class="section2 form-section cont-section">
            <h2>Trabaja con Nosotros</h2>
           <form action="">
                <div>
                    <label for="">Nombre</label>
                    <input type="text" placeholder="nombre">
                </div>
                <div>
                    <label for="">Apellido</label>
                    <input type="text" placeholder="Apellido">
                </div>
                <div>
                    <label for="">Telefono</label>
                    <input type="number" min="3000000000" max="3249999999" placeholder="Telefono">
                </div>
                <div>
                    <label for="">Email</label>
                    <input type="email" placeholder="Email">
                </div>
                <div>
                    <label for="">¿Por qué quieres trabajar con nosotros?</label>
                    <textarea name="" id="" cols="30" rows="10">Tu mensaje</textarea>
                </div>
                <div>
                    <label for="" class="upload">Sube Aquí tu hija de vida 
                        <img src="images/icon-upload.png" alt="">
                        <input type="file">
                    </label>
                    
                </div>
                <button class="btn btn-primary btn-default font-title" type="submit" onclick="" name="submit">
                    <span>Enviar</span>
                </button>
           </form>
        </section>
    </main>
<?php include("template/footer.php"); ?>
