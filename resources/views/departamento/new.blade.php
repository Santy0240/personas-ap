<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add departamento</title>
  </head>
  <body>
    <div class="container">
    <h1>Add departamento</h1>

    <form method="POST" action="{{route ('departamentos.store')}}">
        @csrf
        <div class="mb-3">
          <label for="id" class="form-control">Code</label>
             <input type="Text" class="form-control" id="id" aria-describedby="idhelp" name="id">
          <div id="emailHelp" class="form-text">Departamento Code</div>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Departamento</label>
          <input type="text" required class="form-control" id="name" aria-describedby="namehelp" name="name" placeholder="departamento name.">
        </div>
        <label for="municipality">Pais  </label>
        <select class="form-select" id="pais" name="code" required>
         <option selected disabled value="">Choose one.... </option>
         @foreach ($paises as $pais)   
                  <option value="{{$pais->pais_codi}}">{{$pais->pais_nomb}}</option>
         @endforeach
        </select>
         <div class="mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{route ('departamentos.index')}}" class="btn btn-warning">Cancel</a>
        
         </div>
        
       
      </form>
   
  </body>
</html>