<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

  <!-- =====BOX ICONS===== -->
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

  <title>Portfolio website complete</title>
</head>
<body>
<section class="contact section" id="contact">
    <h2 class="section-title">Contact</h2>

    <!-- Success message -->
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif

    <div class="contact__container bd-grid">
        <form method="post" action="{{url('/contact')}}" class="contact__form">
          @csrf
          <div class="form-group">
            <input type="text" name="name" placeholder="Name" class="contact__input {{ $errors->has('name') ? 'error' : '' }}">
            <!-- Error -->
            @if ($errors->has('name'))
            <div class="error">
                {{ $errors->first('name') }}
            </div>
            @endif
          </div>
          <div class="form-group">
            <input type="mail" name="mail" placeholder="Email" class="contact__input {{ $errors->has('mail') ? 'error' : '' }}">
            <!-- Error -->
            @if ($errors->has('mail'))
            <div class="error">
                {{ $errors->first('mail') }}
            </div>
            @endif
          </div>
          <div class="form-group">
            <textarea name="message" id="" cols="0" rows="10" class="contact__input {{ $errors->has('message') ? 'error' : '' }}"></textarea>
            @if ($errors->has('message'))
            <div class="error">
                {{ $errors->first('message') }}
            </div>
            @endif
          </div>
            <input type="submit" value="Envoyer" class="contact__button button">
        </form>
    </div>
    <div class="ml-5">

      <a type="button" class="btn bg-primary mt-5 px-5" href="{{ backpack_url('dashboard') }}">Back to Dashboard</a>
    </div>
  </section>
    <script src="assets/js/scrollreveal.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
