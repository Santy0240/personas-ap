<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit departamento</title>
  </head>
  <body>
    <div class="container">
    <h1>Edit departamento</h1>

    <form method="POST" action="{{route ('departamentos.update',['departamento'=>$departamento->depa_codi])}}">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="codigo" class="form-control">id</label>
             <input type="Text" class="form-control" id="id" aria-describedby="codigohelp" name="id"
              disabled= "disabled" value="{{$departamento->depa_codi}}">
          <div id="codigohelp" class="form-text">departamento id</div>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">departamento</label>
          <input type="text" required class="form-control" id="name" aria-describedby="namehelp" name="name" placeholder="comuna name."
          value="{{$departamento->depa_nomb}}">
        </div>
        <label for="pais">pais  </label>
        <select class="form-select" id="pais" name="code" required>
         <option selected disabled value="">Choose one.... </option>
         @foreach ($paises as $pais) 
         @if ($pais->pais_codi == $departamento->pais_codi)  
                  <option value="{{$departamento->depa_codi}}">{{$departamento->depa_nomb}}</option>
         @else <option value="{{$departamento->depa_codi}}">{{$departamento->depa_nomb}}</option>
         @endif         
         @endforeach
        </select>
         <div class="mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{route ('departamentos.index')}}" class="btn btn-warning">Cancel</a>
        
         </div>
        
       
      </form>
   
  </body>
</html>