<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<div class="d-flex justify-content-center text-center py-5">

          <form class="p-5 bg-light" method="post" enctype= multipart/form-data>
               <h1>Registro Usuario</h1>
          <div class="form-group">
          <label for="Emailusuario">Email</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="Emailusuario" class="form-control" type="email" name="registroEmailusuario">
          </div>

          <div class="form-group">
          <label for="Contrasenausuario">Contrasena</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="Contrasenausuario" class="form-control" type="password" name="registroContrasenausuario">
          </div>

          <div class="form-group">
          <label for="Nombreusuario">Nombres</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="Nombreusuario" class="form-control" type="Select" name="registroNombreusuario">
          </div>

          <div class="form-group">
          <label for="Apellidousuario">Apellido</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="Apellidousuario" class="form-control" type="text" name="registroApellidousuario">
          </div>

          <div class="form-group">
          <label for="FK_RolIDusuario">FK_RolID</label>
          
               <div class="input-group">
          
                    <div class="input-group-prepend">
                         <span class="input-group-text">
                              <i class="fas fa-evelope"></i>
                         </span>
                    </div>
                           
               <input id="FK_RolIDusuario" class="form-control" type="Select" name="registroFK_RolIDusuario">
          </div>




              


          <?php

               $registrousuario = ControladorUsuario::ctrRegistroUsuario();
 
 
 
               if($registrousuario == "ok")
               {
                    echo '<script>


                    if(window.history.replaceState)
                    {
                         window.history.replaceState(null,null,window.location.href);
                    }


                    </script>';

                    echo '<div class="alert alert-success">El Usuario ha sido registado</div>';

               }


               ?>



         

               <button type="submit" class="btn btn-primary">Guardar</button>
          </div>


          </form>




 </div>