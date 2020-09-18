<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <h2 class="text-secondary mt-5 text-center">Edit Skill</h2>
    <form class="" action="{{url('/skill/'.$skill->id)}}" method="post">
      @csrf
      @method('PUT')
    <div class="input-group mx-auto" style="width: 500px; ">
      <div class="input-group mb-3" >
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Skill Name</span>
        </div>
        <input type="text" value="{{ $skill->skill_name }}" class="form-control" name="skill_name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Percentage</span>
        </div>

        <input type="text" value="{{ $skill->percentage }}" class="form-control" name="percentage" placeholder="between 0 to 100" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Add</button>
        </div>
      </div>
    </div>
      <!-- <div class="input-group mx-auto" style="width: 500px; margin-top: 30vh">
      <input class="form-control" type="text" name="skill_name" value="{{$skill->skill_name}}">
      <input class="form-control" type="text" name="percentage" value="{{$skill->percentage}}">
      <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="submit">Modify</button>
      </div>
    </div> -->
</form>
  </body>
</html>
