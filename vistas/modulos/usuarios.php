 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   
    <section class="content-header">
      <h1>
        Administrar Usuarios
        <small>Panel de control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li class="active">Administrar Usuarios</li>
      </ol>
    </section>


    <section class="content">

  
      <div class="box">

        <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
        Agregar usuario

        </button>

        </div>
        <div class="box-body">
         
        <table class="table table-bordered table-stripped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Usuario</th>
              <th>Foto</th>
              <th>Perfil</th>
              <th>Estado</th>
              <th>Último Login</th>
              <th>Acciones</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>1</td>
              <td>Usuario Administrador</td>
              <td>admin</td>
              <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px" alt=""></td>
              <td>Administrador</td>
              <td><button class="btn btn-success btn-xs">Activado</button></td>
              <td>2020-03-03 12:54:22</td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning"> <i class="fa fa-pencil"></i></button>
                
                  <button class="btn btn-danger"> <i class="fa fa-times"></i></button>

                </div>
              </td>
            </tr>
          </tbody>

        </table>

        </div>
        
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<!-- Ventana modal -->
<div class="modal fade" id="modalAgregarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="" role="form" method="post" enctype="multipart/form-data">
      <!-- Cabeza del modal -->
      <div class="modal-header" style="background: #3c8dbc; color:white;">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="box-body">
          <!-- Nombre -->
          <div class="form-group">
            <div class="input-group"> 
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input class="form-control input-lg" type="text" name="nuevoNombre" placeholder="Ingresar Nombre" required>
            </div>
          </div>
          <!-- Usuario -->
          <div class="form-group">
            <div class="input-group"> 
              <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input class="form-control input-lg" type="text" name="nuevouUsuario" placeholder="Ingresar Usuario" required>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group"> 
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input class="form-control input-lg" type="text" name="nuevoPassword" placeholder="Ingresar Contraseña" required>
            </div>
          </div>
          <!-- Entrada para seleccionar su perfil -->
          <div class="form-group">
            <div class="input-group"> 
              <span class="input-group-addon"><i class="fa fa-users"></i></span>
              <select class="form-control input-lg" name="nuevoPerfil" id="">
                <option value=""> Seleccione Perfil</option>
                <option value="Administrador">Administrador</option>
                <option value="Especial">Especial</option>
                <option value="Vendedor">Vendedor </option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="panel">Subir Foto</div>
            <input type="file" id="nuevaFoto" name="nuevaFoto">
            <p class="help-block" >Peso máximo de la foto 200 MB</p>
            <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="100px" alt="">
          </div>
        </div>
      </div>
      <!-- Pie del modal -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>