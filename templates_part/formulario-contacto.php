<section id="formulario-contacto" >
  <form method="post">
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" class="form-control" id="nombre" >
    </div>
    <div class="form-group">
      <label for="correo">Correo</label>
      <input type="email" name="correo" class="form-control" id="correo" >
    </div>
    <div class="form-group">
      <label for="telefono">Teléfono</label>
      <input type="text" name="telefono" class="form-control" id="telefono" >
    </div>
    <div class="form-group">
      <label for="asunto">Motivo de contacto</label>
      <input type="text" name="asunto" class="form-control" id="asunto" >
    </div>
    <div class="form-group">
      <label for="mensaje">Mensaje</label>
      <textarea class="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
    </div>
    <input type="submit" name="enviar" class="btn btn-primary">
    <input type="hidden" name="oculto" value="1">
  </form>
</section>
