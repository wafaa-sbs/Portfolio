<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Experience</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/brico.css') }}">
  </head>
  <body class="bg-light">
    <h2 class="text-secondary mb-5 text-center">Experience</h2>
    <table class="table table-striped">
      <thead>
        <tr id="myth">
          <th id="myth" scope="col">#</th>
          <th scope="col">Duration</th>
          <th scope="col">Career</th>
          <th scope="col">Company</th>
          <th scope="col">Country</th>
          <th scope="col">Modifier</th>
          <th scope="col">Suprimer</th>


        </tr>
      </thead>

      @foreach ($experience as $exper)
     <tbody>
       <tr>

         <th scope="row">{{$exper->id}}</th>
         <td>{{$exper->duration}}</td>
         <td>{{$exper->career}}</td>
         <td>{{$exper->company}}</td>
         <td>{{$exper->place}}</td>
         <td><a type="button" class="btn btn-warning ml-auto" href="{{url('/experience/'.$exper->id.'/edit')}}">Edit</a></td>
          <td><form action="{{url('experience/'.$exper->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mx-2" type="submit">Delete</button>
          </form></td>
         @endforeach
</table>
<div class="text-center">

  <a type="button" class="btn bg-secondary mt-3 px-5" href="{{url('experience/create')}}">Add an experience</a>
</div>
</body>
</html>
