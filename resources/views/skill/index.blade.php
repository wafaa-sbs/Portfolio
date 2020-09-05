<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Skills</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <h2 class="text-secondary mb-5 text-center">Skills</h2>
    <ul class="mx-auto" style="width: 75vw;">
      @foreach ($skill as $skl)
      <li class="d-flex flex-row bd-highlight mb-3">
        {{$skl->skill_name}}
        <a type="button" class="btn btn-warning ml-auto" href="{{url('/skill/'.$skl->id.'/edit')}}">Edit</a>
        <form action="{{url('skill/'.$skl->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger mx-2" type="submit">Delete</button>
        </form>
      </li>
        @endforeach
    </ul>
    <div class="text-center">

      <a type="button" class="btn bg-secondary mt-3 px-5" href="{{url('skill/create')}}">Ajouter un secteur</a>
    </div>
  </body>
</html>
