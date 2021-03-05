<?= $this->extend('layout/template4'); ?>

<?= $this->section('detail'); ?>
<nav class='navbar-fixed'>
    <div class="nav-wrapper">

        <a href="/Web/open" class="brand-logo center">
            <img src="/asset/otaku/img/logo/5.png" alt="">
        </a>
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>
    <div class="progress">
        <div class="indeterminate"></div>
    </div>
</nav>

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

<div class="container sosmed">
    <div class="row">
        <div data-aos="zoom-in" data-aos-delay="100" class="col m3 s3">
            <img src="/asset/otaku/img/sosmed/ig.jpg" alt="">
        </div>
        <div data-aos="zoom-in" data-aos-delay="200" class="col m3 s3">
            <img src="/asset/otaku/img/sosmed/yt.jpg" alt="">
        </div>
        <div data-aos="zoom-in" data-aos-delay="300" class="col m3 s3">
            <img src="/asset/otaku/img/sosmed/fb.jpg" alt="">
        </div>
        <div data-aos="zoom-in" data-aos-delay="400" class="col m3 s3">
            <img src="/asset/otaku/img/sosmed/tiktok.png" alt="">
        </div>
    </div>
</div>


<div data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom" class="judul">
    <h4>My Favorit Anime List</h4>
</div>

<div class="container anime">
    <div class="row">
        <?php foreach ($anime as $a) : ?>
            <div data-aos="zoom-out" data-aos-anchor-placement="top-center" class="col s12 m4 ">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" style="height: 500px;" width="500px" src="/asset/otaku/database/<?= $a['gambar']; ?> ">
                    </div>
                    <div class="card-content responsive">
                        <span class="card-title activator grey-text text-darken-4"><?= $a['nama']; ?>
                            <br>
                            <i class="small material-icons buttom ">expand_less</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"><?= $a['nama']; ?><i class="material-icons right">close</i></span>
                        <p><?= $a['sinopsi']; ?></p>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>


    </div>
</div>

<footer class="flow-text orange darken-2 center-align">
    <p style="color: antiquewhite;">AnimWebProgrammer . Web Design#1 . 2021/2022</p>
</footer>


<?= $this->endSection(); ?>