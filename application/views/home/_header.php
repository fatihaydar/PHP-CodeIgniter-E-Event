<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->







    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>

</head>
<style>
    @media screen and (min-width:1366px){
    .example2 {
        background: url(<?=base_url()?>/uploads/karaman.jpg);
        background-repeat: no-repeat;
        background-size: 1900px 836px;
    }
        .example3 {

            background-repeat: no-repeat;
            background-size: 1080px 130px;
            padding: 0;
        }
    }
    @media screen and (min-width:960px) and (max-width: 1365px){
        .example2 {
            background: url(<?=base_url()?>/uploads/karaman.jpg);
            background-repeat: no-repeat;
            background-size: 1100px 836px;
        }
        .example3 {

            background-repeat: no-repeat;
            background-size: 750px 130px;
            padding: 0;
        }
    }
    @media screen and (min-width:600px) and (max-width: 959px){
        .example2 {
            background: url(<?=base_url()?>/uploads/karaman.jpg);
            background-repeat: no-repeat;
            background-size: 710px 836px;
        }
        .example3 {

            background-repeat: no-repeat;
            background-size: 300px 120px;
            padding: 0;
        }
    }
    @media screen and (min-width:300px) and (max-width: 599px){
        .example2 {
            background: url(<?=base_url()?>/uploads/karaman.jpg);
            background-repeat: no-repeat;
            background-size: 400px 600px;
        }
        .example3 {

            background-repeat: no-repeat;
            background-size: 300px 100px;
            padding: 0;
        }
    }

</style>
<body style="opacity: 0.9;">
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
    <header id="header" >
        <div class="row" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
                <div class="header_top" >
                    <div class="header_top_left" >
                        <ul class="top_nav">

                        </ul>
                    </div>
                    <div class="header_top_right" >
                        <?php
                        if ($this->session->uye_session) {
                        ?>
                        <p style="float: right">Hoşgeldin,<a href="<?=base_url()?>/anasayfa/profil/<?=$this->session->uye_session["id"]?>" style="color:white;float: right"><?=$this->session->uye_session["adsoy"]?></a></p>
                        <?php } else { ?>
                        <p></p>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header_bottom" style="height: 150px">
<!--                    <div class="logo_area"><a href="index.html" class="logo"><img src="images/logo.jpg" alt="">  </a></div>-->
<!--                    <div class="add_banner"><a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div>-->
                    <div class="row" style="height: 200px">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="right_content" style="height: 200px;">
                                <div class="contact_area" >
                                    <img src="<?=base_url()?>/uploads/karamann.jpg" style="width: 1080px;height: 130px" >
<!--                                    --><?php
//                                    if ($this->session->uye_session) {
//                                        ?>
<!--                                        <p>Hoşgeldin,-->
<!--                                    --><?php //} else { ?>
<!--                                    <form action="--><?//=base_url()?><!--/anasayfa/giris_yap" method="post" class="contact_form">-->
<!--                                        <input class="form-control"  style="width:245px;height:30px;float: right" name="email" type="text" placeholder="E-mail*" required><br><br><br>-->
<!--                                        <input class="form-control"  style="width:245px;height:30px;float: right" name="sifre" type="password" placeholder="Şifre*" required><br><br>-->
<!---->
<!--                                        <input type="submit" value="Giriş Yap" style="float: right;margin-top: 15px;width: 115px">-->
<!---->
<!---->
<!--                                    </form>-->
<!--                                    <form action="--><?//=base_url()?><!--/anasayfa/uye_ol" method="post" class="contact_form">-->
<!---->
<!--                                    <input  type="submit" value="Üye Ol" style="float: right;margin-top: 15px;width: 115px;margin-right: 15px">-->
<!--                                    </form>-->
<!--                                    --><?php //} ?>
                                </div>
                            </div>
<!--                         -->
                </div>
            </div>
        </div>
    </header>
    <section id="navArea">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav main_nav">
                    <li class="active"><a href="<?=base_url()?>/anasayfa"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Anasayfa</span></a></li>
<!--                    <li><a href="#">Bi</a></li>-->
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Derneğimiz</a>
                        <ul class="dropdown-menu" role="menu">
                            <?php foreach ($verii as $rs)
                            {?>
                                <li><a href="<?=base_url()?>anasayfa/ayarlar_dernek/<?=$rs->Id?>"><?=$rs->adıı?> </a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bilgilerimiz</a>
                        <ul class="dropdown-menu" role="menu">
                            <?php foreach ($bilgii as $rs)
                            {?>
                                <li><a href="<?=base_url()?>anasayfa/ayarlar_bilgi/<?=$rs->Id?>"><?=$rs->adıı?> </a></li>
                            <?php } ?>
                        </ul>
                    </li>
<!--                    <li><a href="#">Laptops</a></li>-->
<!--                    <li><a href="#">Tablets</a></li>-->
                    <li><a href="<?=base_url()?>/anasayfa/bize_ulas">Bize ULAS</a></li>
                    <?php
                    if ($this->session->uye_session) { ?>
                        <?php $randStr = chr(mt_rand(65,90)) . chr(mt_rand(65,90)) . chr(mt_rand(65,90)) .
                            chr(mt_rand(65,90)) . chr(mt_rand(65,90)) ;
                        $randStr2 = chr(mt_rand(65,90)) . chr(mt_rand(65,90)) . chr(mt_rand(65,90)) .
                            chr(mt_rand(65,90)) . chr(mt_rand(65,90)) ;?>
                    <li class="dropdown"> <a href="<?=base_url()?>/anasayfa/profil/<?=$this->session->uye_session["id"]?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Profilim</a>
                        <ul class="dropdown-menu" role="menu">

                            <li><a href="<?=base_url()?>/anasayfa/profil/<?=$randStr2?><?=$this->session->uye_session["id"]?><?=$randStr?>">Profilime Git </a></li>
                                <li><a href="<?=base_url()?>/anasayfa/cikis">Çıkış Yap </a></li>

                        </ul>
                    </li>
                                                       <?php } else { ?>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Üye</a>
                        <ul class="dropdown-menu" role="menu">

                                <li><a href="<?=base_url()?>anasayfa/giris_git">Giriş Yap</a></li>
                            <li><a href="<?=base_url()?>anasayfa/uye_ol">Üye Ol</a></li>

                        </ul>
                    </li>
                    <?php } ?>

                    <li ><a href="<?=base_url()?>/anasayfa/tumicerik">Tüm İçerikler</a></li>

                    <li ><a href="<?=base_url()?>/anasayfa/videolar">Videolar</a></li>
                    <li ><a href="<?=base_url()?>/anasayfa/foto">Foto Galeri</a></li>

                </ul>
            </div>
        </nav>
    </section>
    <section id="newsSection">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="latest_newsarea"> <span>Son Haberler</span>
                    <ul id="ticker01" class="news_sticker">
                        <?php foreach ($haber as $rs)
                            {

                            ?>
                                <?php $randStr = chr(mt_rand(65,90)) . chr(mt_rand(65,90)) . chr(mt_rand(65,90)) .
                                chr(mt_rand(65,90)) . chr(mt_rand(65,90)) ; ?>
                        <li><a href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>"><img src="<?=base_url()?>/uploads/<?=$rs->resim?>" alt=""><?=$rs->başlık?></a></li>
<?php } ?>
                    </ul>
                    <div class="social_area">
                        <ul class="social_nav">
                            <li class="facebook"><a href="<?=$sosyal[0]->facebook?>"></a></li>
                            <li class="twitter"><a href="<?=$sosyal[0]->twitter?>"></a></li>
                            <li class="flickr"><a href="<?=$sosyal[0]->instagram?>"></a></li>
                            <li class="pinterest"><a href="<?=$sosyal[0]->pinterest?>"></a></li>
                            <li class="googleplus"><a href="<?=$sosyal[0]->facebook?>"></a></li>
                            <li class="vimeo"><a href="#"></a></li>
                            <li class="youtube"><a href="#"></a></li>
                            <li class="mail"><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
    End Navigation
    ==================================== -->
