<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add pais</title>
  </head>
  <body>
    <div class="container">
    <h1>Add pais</h1>

    <form method="POST" action="{{route ('paises.store')}}">
        @csrf
        <div class="mb-3">
          <label for="id" class="form-control">Code</label>
             <input type="Text" class="form-control" id="id" aria-describedby="idhelp" name="id">
          <div id="emailHelp" class="form-text">pais Code</div>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">pais</label>
          <input type="text" required class="form-control" id="name" aria-describedby="namehelp" name="name" placeholder="comuna name.">
        </div>
        <label for="municipality">capi pais  </label>
        <select class="form-select" id="municipality" name="code" required>
         <option selected disabled value="">Choose one.... </option>
         @foreach ($paises as $pais)   
                  <option value="{{$pais->pais_capi}}">{{$pais->pais_nomb}}</option>
         @endforeach
        </select>
         <div class="mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{route ('comunas.index')}}" class="btn btn-warning">Cancel</a>
        
         </div>
        
       
      </form>
   
  </body>
</html>