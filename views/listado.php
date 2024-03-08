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
                    <h5 class="card-title">Registros existentes en la base de datos</h5>
                    <p class="card-text"></p>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Rut</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        foreach ($pacientes as $paciente) { ?>
                            <td><?php echo $paciente->getRut() ?></td>
                            <td><?php echo $paciente->getNombre() ?></td>
                            <td><?php echo $paciente->getApellido() ?></td>
                            <td><?php echo $paciente->getDireccion() ?></td>
                            <td><?php echo $paciente->getCiudad() ?></td>
                            <td><?php echo $paciente->getTelefono() ?></td>

                            <td><a href="index.php?op=editar&rut=<?php echo $paciente->getRut() ?>">editar</a></td>
                            <td><a href="index.php?op=eliminar&rut=<?php echo $paciente->getRut() ?>">eliminar</a></td>
                    </tr>
                <?php    } ?>
                </tbody>
            </table>
            <div class="d-grid gap-2">
            <button type="button" class="btn btn-success" onclick="location='index.php?op=agregar'">Agregar registro</button></div>
            <div class="card-footer text-muted">

            </div>
        </body>
        </html>