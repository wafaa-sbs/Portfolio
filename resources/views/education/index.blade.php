<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/brico.css') }}">
  </head>
  <body class="bg-light">
    <h2 class=" mb-5 text-center" style="color:#1dbd22;font-size:40px;font-family:dancing script;margin-top:5%">Educations</h2>
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
         <td><a type="button" class="btn ml-auto" style="color:#1dbd22;font-size:20px;border:1px solid #1dbd22" href="{{url('/education/'.$educate->id.'/edit')}}">Edit</a></td>
          <td><form action="{{url('education/'.$educate->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn mx-2" style="color:red;font-size:20px;border:1px solid red" type="submit">Delete</button>
          </form></td>
         @endforeach
</table>
<div class="text-center">

  <a type="button" class="btn mt-3 px-5" class="btn mt-3 px-5" style="background-color:#1dbd22;color:white;font-size:20px;border:1px solid #1dbd22"   href="{{url('education/create')}}">Add an education</a>
</div>
</body>
</html>
