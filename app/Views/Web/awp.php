<?= $this->extend('layout/template1'); ?>

<?= $this->section('awp'); ?>

<!-- Navbar -->

<div class="navbar-fixed">
    <nav class="white">
        <div class="container">
            <div class="nav-wrapper">
                <a href="/Web/index" class="brand-logo"> <img src="/asset/otaku/img/logo/5.png" alt=""> </> </a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a style="color: black; font-size: 17px;" href="/Web/index">Home</a></li>
                    <li><a style="color: black; font-size: 17px;" href="#about">About Me</a></li>
                    <li><a style="color: black; font-size: 17px;" href="#animfav">AnimFav</a></li>
                    <li><a style="color: black; font-size: 17px;" href="#animwatch">Anim Watched</a></li>
                    <li><a style="color: black; font-size: 17px;" href="#bahasa">Language</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="progress">
    <div class="indeterminate"></div>
</div>

<!-- Slider -->
<div data-aos="zoom-in" data-aos-duration="800" class="slider center-align">
    <ul class="slides">
        <li>
            <img src="/asset/otaku/img/slider/1.jpg">
            <div class="caption center-align">
                <h3 style="color: black;">Ohayo Ghozaimasu</h3>
                <h5 style="color: orange;">Gambatene Minasan</h5>
            </div>
        </li>
        <li>
            <img src="/asset/otaku/img/slider/2.jpg">
            <div class="caption center-align">
                <h3 style="color: orange;">Konichiwa</h3>
                <h5 style="color: black;">hey, I was the one who made this web</h5>
            </div>
        </li>
        <li>
            <img src="/asset/otaku/img/slider/3.jpg">
            <div class="caption center-align">
                <h3 style="color: black;">Konbawa</h3>
                <h5 style="color: orange-darken2;">This is a simple anime web</h5>
            </div>
        </li>
</div>

<!-- Sosmed -->
<div class="container sosmed ">
    <div class="card row">
        <div data-aos="zoom-in" data-aos-delay="100" class="col m4 s4">
            <a href="https://www.instagram.com/ivonlep/?hl=id"><img src="/asset/otaku/img/sosmed/ig.jpg" alt=""></a>
        </div>
        <div data-aos="zoom-in" data-aos-delay="200" class="col m4 s4">
            <a href="https://www.youtube.com/channel/UCms3VwagAM2nfmyizZqL-rQ"><img src="/asset/otaku/img/sosmed/yt.jpg" alt=""></a>
        </div>
        <div data-aos="zoom-in" data-aos-delay="400" class="col m4 s4">
            <a href="https://www.tiktok.com/@_baka.10?lang=id-ID"><img src="/asset/otaku/img/sosmed/tiktok.png" alt=""></a>
        </div>
    </div>
</div>




<!-- Sidebar -->

<ul class="sidenav" id="mobile-nav">
    <li><a href="/Web/index">Home</a></li>
    <li><a href="#about">About Me</a></li>
    <li><a href="#animfav">AnimFav</a></li>
    <li><a href="#animwatch">Anim Watched</a></li>
    <li><a href="#bahasa">Language</a></li>
</ul>


<br>



<!-- About Me -->


<section id="about" class="about scrollspy">
    <div class="container">
        <div class="row">
            <div>
                <h3 data-aos="fade-up" data-aos-anchor-placement="top-center" class="center-align orange-text text-darken-2 ">About Me</h3>
                <div data-aos="fade-up-right" data-aos-anchor-placement="top-center" data-aos-delay="50" class="col m4 s12 lighten">
                    <h5>| Introduce |</h5>
                    <p>Hello, I am the creator of this web, before I did not intend to make this simple website, but because I like it and want to know how to make a simple website, I created this one with an anime theme because I am an otaku / animlovers. I learned web programmer by myself because at that time I attended a school program called Progate I initially learned about Android using python language but I switched to web programmer and I come from Indonesia</p>
                </div>
                <div class="col m4 s12">
                    <div data-aos="fade-up" data-aos-anchor-placement="top-center" class="materialboxed center-align">
                        <img class="circle" width="80%" src="/asset/otaku/img/prof/1.jpg">
                    </div>
                </div>
                <div data-aos="fade-up-left" data-aos-anchor-placement="top-center" data-aos-delay="50" class="col m4 s12">
                    <h5>| My Hobby |</h5>
                    <p>Lay down</p>
                    <div class="progress">
                        <div class="determinate" style="width: 90%"></div>
                    </div>
                    <p>Watching Anime</p>
                    <div class="progress">
                        <div class="determinate" style="width: 95%"></div>
                    </div>
                    <p>Study</p>
                    <div class="progress">
                        <div class="determinate" style="width: 25%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <img src="img/prof/oreki.jpg" alt="" class="circle responsive-img" style="width: 55%"> -->


<br>
<br>




<!-- Fav Anime -->


<div class="parallax-container">
    <div class="parallax"><img src="/asset/otaku/img/parallax/1.png" alt="" class="responsive-img "></div>
    <section id="animfav" class="animfav scrollspy">
        <div class="container fav ">
            <h3 data-aos="zoom-in" data-aos-anchor-placement="top-center" class="orange-text text-darken-2"> My Favorite Anime</h3>
            <br>
            <div class="row">
                <div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="50" class="col m4 s12 center-align">
                    <img src="/asset/otaku/img/fav/1.jpg " class="responsive-img ">
                    <h5><strong>~ Kimi no Suizo o Tabetai ~</strong></h5>
                    <p class="black-text text-darken-2">One day, she happens to find a diary at the hospital. The diary belongs to his classmate named Sakura, a cheerful, cheerful and popular girl from his school.The only problem the girl has is that she has terminal pancreas disease and has time to live a few more months.After the quiet boy discovered this fact, Sakura explained that she was the only person other than her family who knew about her condition. Because Sakura wanted to maintain an orderly school life as long as she could. The boy promised to keep it a secret. And Sakura decided to spend her last few months with that loner.</p>
                </div>

                <div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="50" class="col m4 s12 center-align ">
                    <img src="/asset/otaku/img/fav/2.jpg">
                    <h5><strong>~ Shigatsu wa Kimi no Uso ~</strong> </h5>
                    <p class="black-text text-darken-2">Tells about a talented pianist named Kousei Arima. The very talented Kousei has won various competitions very often. At the age of 11, Kousei decided not to play the piano anymore. He felt that he no longer had a purpose.</p>
                </div>

                <div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="50" class="col m4 s12 center-align  ">
                    <img style="width: 40%;" src="/asset/otaku/img/fav/3.jpg" class="responsive-img ">
                    <h5>~ Hyouka ~</h5>
                    <p class="black-text text-darken-2">Tells about a meeting between a girl who is full of curiosity about something named Chitanda Eru and a man who prefers silence and saves energy, arguably lazy named Oreki Houtaru, their meeting makes many new things in Oreki Houtaru's life.</p>
                </div>
            </div>
            <br>
            <div data-aos="zoom-in" data-aos-anchor-placement="top-center" data-aos-delay="50" class="anim3 center-align">
                <a href="/Web/detail" class="btn red darken-3">MORE</a>
            </div>
        </div>
</div>
</section>




<br>
<br>
<br>
<br>
<br>


<!-- Anime tonton -->
<div class="parallax-container">
    <div class="parallax"><img src="/asset/otaku/img/parallax/1.png" alt="" class="responsive-img "></div>
    <section id="animwatch" class=" scrollspy">
        <div id="animwatch" class="container nim ">
            <div class="row">
                <h3 data-aos="zoom-in" data-aos-anchor-placement="top-center" class="center orange-text text darken-2"> Some of the Anime I Watched</h3>
                <div class="col m3 s12 center ">
                    <div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="" class="">
                        <img src="/asset/otaku/img/card/tonikaku.jpg" class="responsive-img ">
                        <h5>Tonikaku Kawai</h5>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="" class="col m3 s12 center">
                    <div class="">
                        <img src="/asset/otaku/img/card/darling.jpg" class="responsive-img ">
                        <h5>Darling in the Franxx</h5>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="" class="col m3 s12 center">
                    <div class="">
                        <img src="/asset/otaku/img/card/kaichou.jpg" class="responsive-img ">
                        <h5>Kaichou Maid-Sama</h5>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="" class="col m3 s12 center">
                    <div class="">
                        <img src="/asset/otaku/img/card/gotoubun.jpg" class="responsive-img ">
                        <h5>GotoubounHanayome</h5>

                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-anchor-placement="top-center" data-aos-delay="" class="anim2 center-align">
                    <a href="/Web/anim2" class="btn  red darken-3">more</a>
                </div>
            </div>
        </div>
</div>
</section>
</div>

<br>
<br>




<!-- Bahasa -->

<div id="bahasa" class="container bahasa scrollspy">
    <div data-aos="zoom-in" data-aos-anchor-placement="center-bottom" class="row">
        <h3 class="center-align orange-text text-darken-2 ">Language / Gengo / Bahasa</h3>
        <br>
        <br>
        <div data-aos-delay="50" class="col m3 s6">
            <img src="/asset/otaku/img/skill/php.png" alt="">
        </div>
        <div data-aos-delay="50" class="col m3 s6">
            <img src="/asset/otaku/img/skill/html.png" alt="">
        </div>
        <div data-aos-delay="50" class="col m3 s6">
            <img src="/asset/otaku/img/skill/css.png" alt="">
        </div>
        <div data-aos-delay="50" class="col m3 s6">
            <img src="/asset/otaku/img/skill/js.png" alt="">
        </div>

    </div>
</div>



<!-- Code Editor -->



<!-- footer -->

<footer class="flow-text orange darken-2 center-align">
    <p style="color: antiquewhite;">AnimWebProgrammer . Web Design#1 . 2021/2022</p>
    <i class="far fa-copyright"></i>
</footer>
<?= $this->endSection(); ?>