<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?= base_url('/asset/otaku/css/materialize.min.css'); ?>" media="screen,projection" />
    <!-- my css -->
    <link rel="stylesheet" href="<?= base_url('/asset/otaku/css2/style2.css'); ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>AnimWebProgramer</title>

</head>
<style>

</style>

<body id="home" class="scrollspy">

    <?= $this->renderSection('detail'); ?>

    <script type="text/javascript" src="<?= base_url('/asset/otaku/js/materialize.min.js'); ?>"></script>
    <script>
        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 500,
            transition: 600,
            interval: 4000,
        });

        AOS.init();
    </script>

</body>

</html>