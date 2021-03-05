<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?= base_url('/asset/otaku/css/materialize.min.css'); ?>" media="screen,projection" />
    <!-- my css -->
    <link rel="stylesheet" href="<?= base_url('/asset/otaku/css2/style3.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>AnimWebProgramer</title>

</head>
<style>

</style>

<body id="home" class="scrollspy">

    <?= $this->renderSection('anim2'); ?>

    <script type="text/javascript" src="<?= base_url('/asset/otaku/js/materialize.min.js'); ?>"></script>
    <script>
        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 500,
            transition: 600,
            interval: 4000,
        });

        const materialboxed = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialboxed);

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll);

        const autocomplete = document.querySelectorAll('.autocomplete');
        M.Autocomplete.init(autocomplete);
    </script>

</body>

</html>