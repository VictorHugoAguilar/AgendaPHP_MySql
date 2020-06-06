<div class="form-row">
     <div class="form-group col-md-6">
          <label for="nombre">Nombre <small>*</small></label>
          <input type="text" placeholder="Nombre Contacto" class="form-control" id="nombre" value="<?php echo (isset($contacto['nombre'])) ? $contacto['nombre'] : '';  ?>">
     </div>
     <div class="form-group col-md-6">
          <label for="empresa">Empresa <small>*</small></label>
          <input type="text" placeholder="Nombre Empresa" class="form-control" id="empresa" value="<?php echo (isset($contacto['empresa'])) ? $contacto['empresa'] : '';  ?>">
     </div>
</div>
<div class="form-group">
     <label for="direccion">Direccion</label>
     <input type="text" class="form-control" placeholder="Dirección Contacto" id="direccion" value="<?php echo (isset($contacto['direccion'])) ? $contacto['direccion'] : '';  ?>">
</div>

<div class="form-row">
     <div class="form-group col-md-6">
          <label for="telefono">Telefono <small>*</small></label>
          <input type="tel" class="form-control" placeholder="Teléfono Contacto" id="telefono" value="<?php echo (isset($contacto['telefono'])) ? $contacto['telefono'] : '';  ?>">
     </div>
     <div class="form-group col-md-6">
          <label for="empresa">Email</label>
          <input type="email" class="form-control" placeholder="Email del Contacto" id="email" value="<?php echo (isset($contacto['email'])) ? $contacto['email'] : '';  ?>">
     </div>
</div>

<div class="campo enviar">
     <?php
     $textoBtn = (isset($contacto['telefono'])) ? 'Guardar' : 'Añadir';
     $accion = (isset($contacto['id'])) ? 'editar' : 'crear';
     ?>
     <input type="hidden" name="accion" id="accion" value="<?php echo $accion; ?>">
     <?php if (isset($contacto['id'])) { ?>
          <input type="hidden" name="id" id="id" value="<?php echo $contacto['id']; ?>">
     <?php } ?>
     <input type="submit" value="<?php echo $textoBtn; ?>">
</div>