@if(count($errors) > 0)

  <div class="alert alert-danger">
    <ul>
      <li>El campo NOMBRE es requerido.</li>
      <li>El campo APELLIDO es requerido.</li>
      <li>Uno de los campos PROTECTOR o DEPORTE es requerido.</li>
    </ul>
  </div>

@endif
