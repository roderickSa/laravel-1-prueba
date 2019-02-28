Seccion para crear empleados

<form action="{{url('/empleados')}}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <label for="nombre" >{{'Nombre'}}</label>
  <input type="text" name="nombre" id="nombre" value=""><br/>

  <label for="apellidoPaterno" >{{'ApellidoPaterno'}}</label>
  <input type="text" name="apellidoPaterno" id="apellidoPaterno" value=""><br/>

  <label for="apellidoMaterno" >{{'ApellidoMaterno'}}</label>
  <input type="text" name="apellidoMaterno" id="apellidoMaterno" value=""><br/>

  <label for="correo" >{{'Correo'}}</label>
  <input type="email" name="correo" id="correo" value=""><br/>

  <label for="foto" >{{'Foto'}}</label>
  <input type="file" name="foto" id="foto" value=""><br/>

  <input type="submit" value="Agregar">

  <a href="{{url('/empleados')}}">Listar Empleado</a>

</form>