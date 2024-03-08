<DOCTYPE html>
    <html>

    <head>
        <meta charset='utf-8'>
        <title>Odontologo MrRobinson</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet"href="clinica.css">
    </head>

    <body>

        <div class="card text-center">
            <div class="card-header">
            Wena Crack!!!
            </div>
            <div class="card-body">
                <h5 class="card-title">Edición de Pacientes</h5>
                <br>
                <form class="row" action="index.php?op=editarPaciente" method="post">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <input type="hidden" name="rutEditar"  value="<?php echo $paciente->getRut(); ?>">
                        <div class="row">
                            <input type="text" class="form-control" name="txtRut" placeholder="Ingrese el Rut" value="<?php echo $paciente->getRut(); ?>" disabled>
                        </div>
                        <br>
                        
                        <div class="row">
                            <input type="text" class="form-control" name="txtNombre" placeholder="Ingrese el nombre"  value="<?php echo $paciente->getNombre(); ?>" required>
                        </div>
                        <br>

                        <div class="row">
                            <input type="text" class="form-control" name="txtApellido" placeholder="Ingrese el apellido"  value="<?php echo $paciente->getApellido(); ?>" required>
                        </div>
                        <br>

                        <div class="row">
                            <input type="text" class="form-control" name="txtDireccion" placeholder="Ingrese la direccion"  value="<?php echo $paciente->getDireccion(); ?>" required>
                        </div>
                        <br>

                        <div class="row">
                            <input type="text" class="form-control" name="txtCiudad" placeholder="Ingrese la ciudad"  value="<?php echo $paciente->getCiudad(); ?>" required>
                        </div>
                        <br>
                        <div class="row">
                            <input type="text" class="form-control" name="txtTelefono" placeholder="Ingrese el telefono"  value="<?php echo $paciente->getTelefono(); ?>" required>
                        </div>
                        <br>
                        <div class="row">
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <div class="card-footer text-muted">  <a href="index.php?op=inicio">volver al index</a></div>
    </body>

    </html>