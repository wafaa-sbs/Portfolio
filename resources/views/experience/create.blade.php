<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create an Education</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <h2 class="text-secondary mt-5 text-center">Add an Experience</h2>
    <form action="{{url('/experience')}}" method="post">
      @csrf

      <div class="input-group mx-auto" style="width: 500px; ">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Duration</span>
          </div>
          <input type="text" placeholder="Format: xxxx - xxxx" class="form-control" name="duration" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Career</span>
          </div>
          <input type="text" placeholder="What you studied" class="form-control" name="career" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Company</span>
          </div>
          <input type="text" placeholder="Where you studied" class="form-control" name="company" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Country</span>
          </div>
          <input type="text" class="form-control" name="place" placeholder="Format: Country - City" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Add</button>
          </div>
        </div>
      </div>

      <!-- <div class="input-group mx-auto" style="width: 500px; margin-top: 30vh">
      <input class="form-control" type="text" name="skill_name" aria-describedby="button-addon2">
      <input class="form-control" type="number" name="percentage" aria-describedby="button-addon2">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Add</button>
      </div>
    </form>
    </div> -->
  </body>
</html>
