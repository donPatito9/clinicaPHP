<DOCTYPE html>
    <html>
    <head>
        <meta charset='utf-8'>
        <title>Odontologo MrRobinson</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!--<link rel="stylesheet" href="clinica.css">-->
    </head>

    <body>
        <div class="card text-center">
            <div class="card-header">
            Wena Crack!!!
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <a class="navbar-brand" href="index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?op=agregar">Agregar Pacientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?op=buscarApellido">Buscar Pacientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?op=listar">Listar Pacientes</a>
                    </li>
                </ul>
            </div>
        </nav>

            <div class="card-body bg-inherit">
                <h5 class="card-title">Registro de Pacientes</h5>
                <br>
                <form class="row" action="index.php?op=agregarPaciente" method="post">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <div class="row">
                            <input type="text" class="form-control" name="txtRut" placeholder="Ingrese el Rut" required>
                        </div>
                        <br>
                        <div class="row">
                            <input type="text" class="form-control" name="txtNombre" placeholder="Ingrese el nombre" required>
                        </div>
                        <br>
                        <div class="row">
                            <input type="text" class="form-control" name="txtApellido" placeholder="Ingrese el Apellido" required>
                        </div>
                        <br>
                        <div class="row">
                            <input type="text" class="form-control" name="txtDireccion" placeholder="Ingrese la direccion" required>
                        </div>
                        <br>
                        <div class="row">
                            <input type="text" class="form-control" name="txtCiudad" placeholder="Ingrese la ciudad" required>
                        </div>
                        <br>
                        <div class="row">
                            <input type="text" class="form-control" name="txtTelefono" placeholder="Ingrese el teléfono" required>
                        </div>
                        <br>
                        <div class="row">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <div class="card-footer text-muted"> <a href="index.php?op=inicio">volver al index</a></div>
    </body>

    </html>
