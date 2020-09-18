<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create an Experience</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <h2 class="text-secondary mt-5 text-center">Add an Experience</h2>
    <form action="{{url('/experience/'.$experience->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="input-group mx-auto" style="width: 500px; ">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Duration</span>
          </div>
          <input type="text" value="{{$experience->duration}}" class="form-control" name="duration" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Career</span>
          </div>
          <input type="text" value="{{$experience->career}}" class="form-control" name="career" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Company</span>
          </div>
          <input type="text" value="{{$experience->company}}" class="form-control" name="company" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Country</span>
          </div>
          <input type="text" class="form-control" value="{{$experience->place}}" name="place" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Modify</button>
          </div>
        </div>
      </div>

    </form>
    </div>
  </body>
</html>
