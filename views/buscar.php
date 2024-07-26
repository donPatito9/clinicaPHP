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

            <div class="card-body">
                <h5 class="card-title">Búsqueda de Pacientes por Apellido</h5>
                <br>
                <form class="row" action="index.php?op=busquedaApellidoImpl" method="post">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" name="txtApellido" placeholder="Ingrese el apellido" required>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-success">Buscar</button>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <input type="text" class="form-control" disabled value="<?php if($paciente !=null) echo $paciente->getRut(); ?>">
                        </div>
                        <br>
                        <div class="row">
                            <input type="text" class="form-control" disabled value="<?php if($paciente !=null) echo $paciente->getNombre(); ?>">
                        </div>
                        <br>
                        <div class="row">
                            <input type="text" class="form-control" disabled value="<?php if($paciente !=null) echo $paciente->getApellido(); ?>">
                        </div>
                        <br>
                        <div class="row">
                            <input type="text" class="form-control" disabled value="<?php if($paciente !=null) echo $paciente->getDireccion(); ?>"> 
                        </div>
                        <br>
                        <div class="row">
                            <input type="text" class="form-control" disabled value="<?php if($paciente !=null) echo $paciente->getCiudad(); ?>">
                        </div>
                        <br>
                        <div class="row">
                            <input type="text" class="form-control" disabled value="<?php if($paciente !=null) echo $paciente->getTelefono(); ?>">
                        </div>
                        <br>
                    </div>
                </form>
            </div>

        </div>

        <div class="card-footer text-muted"> <a href="index.php?op=inicio">volver al index</a></div>
    </body>

    </html>
