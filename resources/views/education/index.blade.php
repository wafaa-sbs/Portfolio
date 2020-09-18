<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bricileurs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/brico.css') }}">
  </head>
  <body class="bg-light">
    <h2 class="text-secondary mb-5 text-center">Educations</h2>
    <table class="table table-striped">
      <thead>
        <tr id="myth">
          <th id="myth" scope="col">#</th>
          <th scope="col">Duration</th>
          <th scope="col">Profession</th>
          <th scope="col">Establishment</th>
          <th scope="col">Country</th>
          <th scope="col">Modifier</th>
          <th scope="col">Suprimer</th>


        </tr>
      </thead>

      @foreach ($education as $educate)
     <tbody>
       <tr>

         <th scope="row">{{$educate->id}}</th>
         <td>{{$educate->duration}}</td>
         <td>{{$educate->profession}}</td>
         <td>{{$educate->establishment}}</td>
         <td>{{$educate->place}}</td>
         <td><a type="button" class="btn btn-warning ml-auto" href="{{url('/education/'.$educate->id.'/edit')}}">Edit</a></td>
          <td><form action="{{url('education/'.$educate->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mx-2" type="submit">Delete</button>
          </form></td>
         @endforeach
</table>
<div class="text-center">

  <a type="button" class="btn bg-secondary mt-3 px-5" href="{{url('education/create')}}">Add an education</a>
</div>
</body>
</html>
