
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Works</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
  </head>

  <body class="bg-light">
    <h2 class=  "text-center" style="color:#1dbd22;font-size:40px;font-family:dancing script; margin-top:5%">Works</h2>
    <ul class="mx-auto" style="width: 75vw;">
      @foreach ($work as $wrk)
      <li class="d-flex flex-row bd-highlight mb-3">
        {{$wrk->work_name}}
        <a type="button" class="btn ml-auto" style="color:#1dbd22;font-size:20px;border:1px solid #1dbd22" href="{{url('/work/'.$wrk->id.'/edit')}}">Edit</a>
        <form action="{{url('work/'.$wrk->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn mx-2" type="submit" style="color:red;font-size:20px;border:1px solid red">Delete</button>
        </form>
      </li>
        @endforeach
    </ul>
    <div class="text-center">

      <a type="button" class="btn mt-3 px-5" style="background-color:#1dbd22;color:white;font-size:20px;border:1px solid #1dbd22" href="{{url('work/create')}}">Add a Work</a>
    </div>
  </body>

  <!-- <div class="text-center" style=" width: 750px; margin: auto;">
  <h2 class="text-primary mt-5 text-center" style="border-radius: 10px; height: 50px; background-color: #FFC107;">You are not allowed to access here</h2> -->
</div>
</html>
