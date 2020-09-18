<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create an Education</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <h2 class="text-secondary mt-5 text-center">Add an Education</h2>
    <form action="{{url('/education/'.$education->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="input-group mx-auto" style="width: 500px; ">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Duration</span>
          </div>
          <input type="text" value="{{$education->duration}}" class="form-control" name="duration" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Profession</span>
          </div>
          <input type="text" value="{{$education->profession}}" class="form-control" name="profession" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Establishment</span>
          </div>
          <input type="text" value="{{$education->establishment}}" class="form-control" name="establishment" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Country</span>
          </div>
          <input type="text" value="{{$education->place}}" class="form-control" name="place" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Modify</button>
          </div>
        </div>
      </div>

    </form>
    </div>
  </body>
</html>
