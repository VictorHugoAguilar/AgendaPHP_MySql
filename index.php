<?php
include 'inc/funciones/funciones.php';
include 'inc/layout/header.php';
?>
<div class="contenedor-barra">
     <h1>Agenda de Contactos</h1>
</div>

<div class="container">

     <div class="bg-amarillo contenedor sombra">
          <form id="contacto" action="#">
               <legend>Añada un contacto <span>Los campos marcados con <small>*</small> son obligatorios</span> </legend>
               <?php include 'inc/layout/formulario.php'; ?>
          </form>
     </div>

     <div class="bg-blanco contenedor sombra contactos">
          <div class="contenedor-contactos">
               <h2>Contactos</h2>

               <input type="text" id="buscar" class="buscador sombra" placeholder="Buscar Contactos...">

               <p class="total-contactos"><span></span> Contactos</p>

               <div class="contenedor-tabla">
                    <table class="table table-striped table-hover">
                         <thead>
                              <tr>
                                   <th scope="col"> Nombre</th>
                                   <th scope="col"> Empresa</th> 
                                   <th scope="col"> Teléfono</th>
                                   <th scope="col">Email</th>
                                   <th scope="col"> Dirección</th>
                                   <th scope="col">Acciones</th>
                              </tr>
                         </thead>

                         <tbody>
                              <?php $contactos = obtenerContactos();
                              if ($contactos->num_rows) {
                                   foreach ($contactos as $contacto) { ?>
                                        <tr>
                                             <td><?php echo $contacto['nombre']; ?></td>
                                             <td><?php echo $contacto['empresa']; ?></td>
                                             <td><?php echo $contacto['telefono']; ?></td>
                                             <td><?php echo $contacto['email']; ?></td>
                                             <td><?php echo $contacto['direccion']; ?></td>
                                             <td>
                                                  <a class="btn-editar btn" href="editar.php?id=<?php echo $contacto['id']; ?>">
                                                       <i class="fas fa-pen-square"></i>
                                                  </a>
                                                  <button data-id="<?php echo $contacto['id']; ?>" type="button" class="btn-borrar btn">
                                                       <i class="fas fa-trash-alt"></i>
                                                  </button>
                                             </td>
                                        </tr>
                              <?php }
                              } ?>
                         </tbody>
                    </table>
               </div>
          </div>
     </div>
</div>

<?php include 'inc/layout/footer.php'; ?>