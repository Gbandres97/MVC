<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo constant('URL') ?>/public/css/styles.css">
    <title>Login</title>
</head>

<body>
    <?php include "layouts/loading.php" ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <img src="https://ichirakuramenco.com/wp-content/uploads/2020/05/cropped-Logo1-1-1-4.png" width="100px" />
                    <img src="https://ichirakuramenco.com/wp-content/uploads/elementor/thumbs/LOGO-CHI-GRAN-p9tyk7dshpshzgdlw2r1j5budzbjvxszg3avmoxhu0.png" alt="" width="100px" />
                </ul>
                <span class="navbar-text">
                   <a href="<?php echo constant('URL')?>/registrarse">Registrarse</a>
                </span>
            </div>
        </div>
    </nav>

    <div class="d-flex align-items-center justify-content-center m-3 p-30" style="height: 100vh;">
        <div class="d-flex">
            <img src="<?php echo constant('URL') ?>/public/multimedia/login1.png" class="w-50" alt="">
            <img src="<?php echo constant('URL') ?>/public/multimedia/login2.png" class="w-50" alt="">
        </div>
        <div class="d-flex align-items-center justify-content-center w-50 bg-secondary h-50 text-white">
            <center>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                        <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                        <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z" />
                    </svg>
                    <h3>Ingresar</h3>
                    <form action="<?php echo constant('URL') ?>/login/consultUser" method="post">
                        <label for="">Ingrese el correo electrónico</label>
                        <input type="email" class="form-control" id="" name="user" placeholder="example@gmail.com" required>
                        <label for="">Ingrese la contraseña</label>
                        <input type="password" class="form-control" id="" name="password" required>
                        <br>
                        <input type="submit" class="btn btn-primary" value="Ingresar">
                    </form>
                </div>
            </center>
        </div>
    </div>

    <script>
        window.onload = function() {
            document.getElementById("loading").hidden = true;
        }
    </script>
</body>

</html>