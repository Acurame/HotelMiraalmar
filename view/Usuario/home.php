<?php include_once('../../includes/header.php') ?>
<div class="container-lg my-4"  style="padding-top: 5%">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-text">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-success btn-lg" data-bs-toggle="modal" data-bs-target="#modelId">
                  Crear
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <form action="../../controller/controller-usuario.php" method="post">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Crear cuenta</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                                        <input type="text" class="form-control" placeholder="Nombre De Usuario" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock"></i></span>
                                        <input type="password" class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock-fill"></i></span>
                                        <input type="password" class="form-control" placeholder="Confirmar Contraseña" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-chat-right-dots"></i></span>
                                        <input type="text" class="form-control" placeholder="Correo" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01"><i class="bi bi-collection"></i></label>
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option selected>Selecione...</option>
                                            <option value="1">Activo</option>
                                            <option value="2">Desactivado</option>
                                            <option value="3">Enespera</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-outline-primary">Crear</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                
            </span>
        </div>
    </nav>
</div>
<div class="container-lg">
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Nombre de Usuario</th>
        <th>contraseña</th>
        <th>Correo</th>
        <th>Rol</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    
    </tbody>
  </table>
</div>

<?php include_once('../../includes/fooder.php') ?>