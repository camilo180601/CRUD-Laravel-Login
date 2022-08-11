<h1>{{$modo}} empleado</h1>
  @if(count($errors)>0)
      <div class="alert alert-danger" role="alert">
        <Ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </Ul>
      </div>
  @endif
    <div class="mb-3">
      <label for="Nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" aria-describedby="helpId" placeholder="Escriba su nombre">
      
    </div>
    <br>
    <div class="mb-3">
      <label for="Apellido" class="form-label">Apellido</label>
      <input type="text" class="form-control" name="Apellido" id="Apellido" aria-describedby="helpId" value="{{ isset($empleado->Apellido)?$empleado->Apellido:old('Apellido') }}" placeholder="Escriba su apellido">
      
    </div>
    <br>
    <div class="mb-3">
      <label for="correo" class="form-label">Correo</label>
      <input type="email" class="form-control" name="correo" id="correo" value="{{ isset($empleado->Correo)?$empleado->Correo:old('correo') }}" aria-describedby="helpId" placeholder="Escriba su correo">
      
    </div>
    <br>
    <div class="mb-3">

      <label for="foto" class="form-label">Foto</label>
      @if(isset($empleado->Foto))
      <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">
      @endif
      <input type="file" class="form-control" name="foto" id="foto" value="" aria-describedby="helpId">
      
    </div>
    <br>
    <a class="btn btn-primary" href="{{ url('empleado/')}}">Regresar</a>
 
    <input type="submit" class="btn btn-success" value="{{ $modo }} datos" ></input>

