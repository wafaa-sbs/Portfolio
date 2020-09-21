@extends(backpack_view('blank'))

@section('content')

        <!--======= HOME =======-->
<section id="slider">
  <figure>
    <img src="{{asset('img/bg0.jpg')}}" alt="bg">
    <img src="{{asset('img/bg2.jpg')}}" alt="bg">
    <img src="{{asset('img/bg1.jpg')}}" alt="bg">
    <!-- <img src="{{asset('img/bg4.jpg')}}" alt="bg">
    <img src="{{asset('img/bg3.jpg')}}" alt="bg"> -->
  </figure>
</section>

        <!--======= ABOUT =======-->
        
<section id="about" class="about-area" name="about" id="about">
  <div class="container wrapper">
    <div class="about-head wow fadeInDownBig">
      <h2>À propos de moi</h2>
        <h6>Je suis développeur web freelance et j'aime ça !</h6>
    </div>
    <div class="row row-center">
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="about-img wow fadeInLeft">
          <img src="{{asset('img/me.jpg')}}" alt="bg">
        </div>
      </div>

      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="about-text wow fadeInRight">
          <p>I am a web developer. I had the chance to study this branch of Youcode for a year. I am currently working as a web integrator with clients nationwide.</p>
          <p>Always passionate about new multimedia technologies, I will also study web design later.</p>
          <p>Whether I am a company, a web agency or an individual, I will be happy to meet your needs.</p>
        </div>
      </div>
    </div>
  </div>
</section>     

        <!--======= skills ========-->
<section class="skills-area" id="skills">
  <div class="container wrapper">
    <div class="row skills-content">
      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <h2>Mes compétences</h2>
        @foreach ($skill as $skl)
        <div class="skills-rates">
          <div class="title-skills">
            <p>{{$skl->skill_name}}</p>
          </div>
          <div class="progress-skills">
              <div class="myProgress">
                <div id="myBar-design" class="myBar" style="width:{{$skl->percentage.'%'}}; "></div>
              </div>
          </div>
          <span id="myBar_counter_design" class="myBar-counter">{{$skl->percentage.'%'}}</span>
        </div>
        @endforeach
      </div> 
      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="my-skills-bg">
        <img src="{{asset('img/backg.jpg')}}" alt="bg">
        </div>
      </div>
    </div>   
  </div>
</section>  
        <!--===== Education =====-->
<section id="education" class="educations-area">
  <!-- <div class="container wrapper"> -->
    <div class="text-center">
      <h2>Mes services</h2>
    </div>
    <div class="row">
      <div class="col-md-12 grid-resume">
        @foreach ($education as $educate)
        <div class="education">
            <small>{{$educate->duration}}</small>
            <h3>{{$educate->establishment}}</h3>
            <p>{{$educate->place}}</p>
        </div>
        @endforeach
      </div>
    </div>
  <!-- </div> -->
</section>

        <!--======== FOOTER =======-->
       
       
@endsection
