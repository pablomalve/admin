<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Usuarios</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="content">Inicio</a></li>
            <li class="breadcrumb-item active">Usuarios</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#altaUsuario">Nuevo usuario</button>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped TablaDataTable dt-responsive">
                <thead>
                  <tr>
                    <th style="width:10px">ID</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                    <th>Ultimo Login</th>
                    <th style="width:20px">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $campo = null;
                    $valor = null;
                    $usuarios = UsuariosController::Mostrar($campo, $valor);
                    foreach ($usuarios as $key => $value) {
                      echo '<tr>
                              <td>'.$value["id_usuario"].'</td>
                              <td>'.$value["nombre_usuario"].'</td>
                              <td>'.$value["usuario"].'</td>
                              <td>'.$value["estado_usuario"].'</td>
                              <td>'.$value["ultimo_login_usuario"].'</td>
                              <td><button class="btn btn-warning btn-xs"><i class="fas fa-user-edit"></i></button></td>
                            </tr>';
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
  </section>
</div>


<!---------------------------------------------------
MODAL AGREGAR USUARIO
----------------------------------------------------->
<div id="altaUsuario" class="modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">
        <div class="modal-header" style="background:#3c8dbc; color:white">
          <h4 class="modal-title">Alta de Usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <div class="box-body">
            <div class="form-group">
              <label>Nombre</label>
              <input type="text" class="form-control" name="altaNombreUser" placeholder="Ingrese nombre completo del nuevo usuario" require>
              <!-- <small class="form-text text-muted">Nombre completo del nuevo usuario.</small> -->
            </div>
            <div class="form-group">
              <label>Usuario</label> 
              <input type="text" class="form-control" name="altaUser" placeholder="Ingresar usuario" id="altaUser" required>
            </div>
            <div class="form-group">
              <label>Contraseña</label> 
              <input type="password" class="form-control input-lg" name="altaClaveUser" placeholder="Ingresar contraseña" required>
            </div>
            <div class="form-group">
              <label>Perfil</label> 
              <select class="custom-select" name="altaPerfilUser" required>
                <option value="" selected>Selecionar un perfil de usuario</option>
                <option value="Administrador">Administrador</option>
                <option value="Especial">Especial</option>
                <option value="Usuario">Usuario</option>
              </select>
            </div>  
            <!-- ENTRADA PARA SUBIR FOTO -->
            <div class="form-group">
              <label>Subir foto</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input nuevaFoto" name="altaFotoUser">
                <label class="custom-file-label" for="altaFotoUser">Seleccione una foto</label>
              </div>
              <small class="form-text text-muted">Peso máximo de la foto 2MB</small>
              <!-- <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px"> -->
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-danger toastrDefaultError" data-dismiss="modal">Salir</button>
        </div>
        <?php
          $altausuario = new UsuariosController();
          $altausuario -> CreateUsuario();
        ?>
      </form>

    </div>
  </div>
</div>