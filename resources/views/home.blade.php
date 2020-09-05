@extends(backpack_view('blank'))

@section('content')
<div class="container">
    <main class="l-main">
        <!--===== HOME =====-->
        <section class="home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">Imad</span><br> Web Developer</h1>

                <a href="{{ url('/contact') }}" class="button">Contact</a>
            </div>

            <div class="home__social">
                <a href="" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                <a href="" class="home__social-icon"><i class='bx bxl-behance' ></i></a>
                <a href="" class="home__social-icon"><i class='bx bxl-github' ></i></a>
            </div>

            <div class="home__img">
                <img src="{{asset('img/profil4.png')}}" alt="">
            </div>
        </section>

        <!--===== ABOUT =====-->
        <section class="about section " id="about">
            <h2 class="section-title">About</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="{{asset('img/about1.jpg')}}" alt="">
                </div>

                <div>
                    <h2 class="about__subtitle">I'am Marlon</h2>
                    <p class="about__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate cum expedita quo culpa tempora, assumenda, quis fugiat ut voluptates soluta, aut earum nemo recusandae cumque perferendis! Recusandae alias accusamus atque.</p>
                </div>
            </div>
        </section>

        <!--===== SKILLS =====-->
        <section class="skills section" id="skills">
            <h2 class="section-title">Skills</h2>

            <div class="skills__container bd-grid">
                <div>
                    <h2 class="skills__subtitle">Profesional Skills</h2>
                    <p class="skills__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit optio id vero amet, alias architecto consectetur error eum eaque sit.</p>

                    @foreach ($skill as $skl)
                    <div class="skills__data">
                        <div class="skills__names">
                            <!-- <i class='bx bxs-paint skills__icon'></i> -->
                            <span class="skills__name">{{$skl->skill_name}}</span>
                        </div>
                        <div class="skills__bar " style="width: {{$skl->percentage.'%'}}; ">

                        </div>
                        <div>
                            <span class="skills__percentage">{{$skl->percentage.'%'}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div>
                    <img src="{{asset('img/work3.jpg')}}" alt="" class="skills__img">
                </div>
            </div>
        </section>

        <!--===== WORK =====-->
        <section class="work section" id="work">
            <h2 class="section-title">Work</h2>

            <div class="work__container bd-grid">
              @foreach ($work as $wrk)
                <div class="work__img">
                  <a href=" {{'http://'.$wrk->url_link}} " target="_blank">
                  <p class="bx bx-link">{{$wrk->work_name}}</p>
                    <img src="{{asset('/storage/'.$wrk->image)}}" alt="">
                  </a>
                </div>
                @endforeach
                <!-- <div class="work__img">
                    <img src="{{asset('img/work2.jpg')}}" alt="">
                </div>
                <div class="work__img">
                    <img src="{{asset('img/work3.jpg')}}" alt="">
                </div>
                <div class="work__img">
                    <img src="{{asset('img/work4.jpg')}}" alt="">
                </div>
                <div class="work__img">
                    <img src="{{asset('img/work5.jpg')}}" alt="">
                </div>
                <div class="work__img">
                    <img src="{{asset('img/work6.jpg')}}" alt="">
                </div> -->
            </div>
        </section>
        <!--===== CONTACT =====-->

        </main>

        </div>

    <!--===== FOOTER =====-->
    <footer class="footer">
        <p class="footer__title">Imad</p>
        <div class="footer__social">
            <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
        </div>
        <p>&#169; 2020 copyright all right reserved</p>
    </footer>
@endsection
