<?= $this->extend('layout/template3'); ?>

<?= $this->section('anim2'); ?>

<nav class='navbar-fixed'>
    <div class="nav-wrapper">

        <a href="/Web/open" class="brand-logo center">
            <img src="/asset/otaku/img/logo/5.png" alt="">
        </a>

</nav>

<div data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom" class="judul">
    <h4>My Favorit Anime List</h4>
</div>

<div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col col s12 m12  ">
                <div class=" tabel1 col s12 m12 ">
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Link </th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($anime2 as $a) : ?>


                                <tr>
                                    <td scope="row"><?= $i++; ?></td>
                                    <td>
                                        <img src="/asset/otaku//database/<?= $a['gambar']; ?>" alt="">
                                    </td>

                                    <td>
                                        <?= $a['nama']; ?>
                                    </td>
                                    <td>
                                        <a class="btn orange darken-2" href="<?= $a['link_url']; ?>">Link_URL</a>
                                        <br>
                                        <br>
                                        <a href="<?= $a['link_video']; ?>" class="btn red darken-2">Link_Video</a>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>


                </div>

                <div class="col col s12 m12  ">

                    <br>
                    <br>
                    <br>
                    <div class="container">
                        <div class="">
                            <div class="col s12 m6" style="border: black solid;">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <video class=" activator responsive-video" controls>
                                        <source src="/asset/otaku/video/Love Story - AMV.mp4" type="video/mp4">
                                    </video>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title activator grey-text text-darken-4">Love Story ~ AMV</h4>
                                    <p class="btn orange darken-2"><a href="https://youtu.be/LA2DkaCCu0M">youtube</a></p>
                                </div>
                            </div>

                            <div class="col s12 m6" style="border: black solid;">
                                <div class="">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <video class="responsive-video" controls>
                                            <source src="/asset/otaku/video/yt2.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="card-title activator grey-text text-darken-4">Wrap in Plastic</h4>
                                        <p class="btn orange darken-2"><a href="https://youtu.be/ErSOkn9aWzw">youtube</a></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <footer class="flow-text orange darken-2 center-align">
        <p style="color: antiquewhite;">AnimWebProgrammer . Web Design#1 . 2021/2022</p>
    </footer>




    <?= $this->endsection(); ?>