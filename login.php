<?php include("template/header.php"); ?>
    <main id="main" class="incio">
        <section class="section1 banner">
            <div class="container-banner-contact">
                <div class="item"><img src="images/banner-contactanos.jpg" alt="slider-1"></div>
            </div>
        </section>
        <section class="section2 form-section cont-section">
            <div class="sign up">
                <h2>Registrate</h2>
                <form action="">
                        <div>
                            <label for="">Nombre</label>
                            <input type="text" placeholder="nombre">
                        </div>
                        <div>
                            <label for="">Usurario</label>
                            <input type="text" placeholder="usuario">
                        </div>
                        <div>
                            <label for="">Email</label>
                            <input type="email" placeholder="email">
                        </div>
                        <div>
                            <label for="">Contraseña</label>
                            <input type="password" placeholder="contraseña">
                        </div>
                        <div>
                            <label for="">Confirmar contraseña</label>
                            <input type="password" placeholder="Confirmar contraseña">
                        </div>                        
                        <button class="btn btn-primary btn-default font-title" type="submit" onclick="" name="submit">
                            <span>Registrarse</span>
                        </button>
                </form>
            </div>
            <div class="login">
                <h2>Inicia sesion</h2>
                    <form action="">
                            <div>
                                <label for="">Usurario</label>
                                <input type="text" placeholder="usuario">
                            </div>
                            <div>
                                <label for="">Contraseña</label>
                                <input type="password" placeholder="contraseña">
                            </div>
                            <button class="btn btn-primary btn-default font-title" type="submit" onclick="" name="submit">
                                <span>Iniciar</span>
                            </button>
                    </form>
            </div>      
        </section>
    </main>
<?php include("template/footer.php"); ?>