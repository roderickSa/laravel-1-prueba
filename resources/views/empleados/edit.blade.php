

<form action="{{url('/empleados/'.$empleado->id)}}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}

  <label for="nombre" >{{'Nombre'}}</label>
  <input type="text" name="nombre" id="nombre" value="{{$empleado->Nombre}}"><br/>

  <label for="apellidoPaterno" >{{'ApellidoPaterno'}}</label>
  <input type="text" name="apellidoPaterno" id="apellidoPaterno" value="{{$empleado->ApellidoPaterno}}"><br/>

  <label for="apellidoMaterno" >{{'ApellidoMaterno'}}</label>
  <input type="text" name="apellidoMaterno" id="apellidoMaterno" value="{{$empleado->ApellidoMaterno}}"><br/>

  <label for="correo" >{{'Correo'}}</label>
  <input type="email" name="correo" id="correo" value="{{$empleado->correo}}"><br/>

  <label for="foto" >{{'Foto'}}</label><br/>
  <img src="{{ asset('storage').'/'.$empleado->foto}}" alt="" whith="200"> <br/>
  <input type="file" name="foto" id="foto" value=""><br/>

  <input type="submit" value="Editar">

  <a href="{{url('/empleados')}}">Listar Empleado</a>

</form>