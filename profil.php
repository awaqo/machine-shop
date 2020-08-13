<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Orang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container-fluid bg-top-header px-5">
        <div class="row">
            <a href="https://api.whatsapp.com/send?phone=08176741866" target="_blank" class="nav-link text-light mr-5"><i class="fas fa-phone"></i> 08176741866</a>
            <a href="#" class="nav-link text-light"><i class="fas fa-map-marked-alt"></i> Jl. Sutomo RT31/08 Desa Wanarata, Kecamatan Bantarbolang, Kabupaten Pemalang</a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-header sticky-top">
        <div class="navbar-brand font-weight-bold text-light px-4">
            <img src="assets/img/log-car.png" width="45" height="45" class="img-fluid pt-2 mr-1 d-inline-block align-top">
            Nama Perusahaan
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse px-2" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-2">
                    <a class="nav-link text-light text-capitalize font-weight-bold" href="home">Home</a>
                </li>
                <li class="nav-item mr-2">
                    <a class="menu nav-link text-light text-capitalize font-weight-bold" href="galeri">Galeri</a>
                </li>
                <li class="nav-item mr-2">
                    <a class="menu nav-link text-light text-capitalize font-weight-bold" href="kontak">Kontak Kami</a>
                </li>
                <li class="nav-item active mr-2">
                    <a class="menu nav-link text-light text-capitalize font-weight-bold" href="profil">Profil</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <h1 class="border">Profil</h1>
    </div>
    
    <a href="https://api.whatsapp.com/send?phone=08176741866" target="_blank" class="wa-pop btn bg-header text-light rounded-circle" style="position: fixed; bottom: 80px; right: 30px; height: 45px; display: none"><i class="fab fa-fw fa-whatsapp pt-2"></i></a>
    <!-- scroll to top -->
    <a href="#" class="scrollToTop btn bg-header text-light" style="position: fixed; bottom: 30px; right: 30px; display: none"><i class="fas fa-fw fa-chevron-up"></i></a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script type="text/javascript">
    // AOS init
        AOS.init();
    // scroll to top
        $(document).ready(function(){
            $(window).scroll(function(){
                if($(this).scrollTop() > 200){
                    $('.scrollToTop').fadeIn();
                } else {
                    $('.scrollToTop').fadeOut();
                }
            });
            $('.scrollToTop').click(function(){
                $('html,body').animate({scrollTop: 0}, 1000)
            })
        });

        // pop up wa
        $(document).ready(function(){
            $(window).scroll(function(){
                if($(this).scrollTop() > 200){
                    $('.wa-pop').fadeIn();
                } else {
                    $('.wa-pop').fadeOut();
                }
            });
        });
    </script>
</body>
</html>