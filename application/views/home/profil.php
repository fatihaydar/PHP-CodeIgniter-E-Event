
<style>
    /* custom inclusion of right, left and below tabs */

    .tabs-below > .nav-tabs,
    .tabs-right > .nav-tabs,
    .tabs-left > .nav-tabs {
        border-bottom: 0;
    }

    .tab-content > .tab-pane,
    .pill-content > .pill-pane {
        display: none;
    }

    .tab-content > .active,
    .pill-content > .active {
        display: block;
    }


    .tabs-left > .nav-tabs > li,
    .tabs-right > .nav-tabs > li {
        float: none;
    }

    .tabs-left > .nav-tabs > li > a,
    .tabs-right > .nav-tabs > li > a {
        min-width: 74px;
        margin-right: 0;
        margin-bottom: 3px;
    }

    .tabs-left > .nav-tabs {
        float: left;
        margin-right: 19px;
        border-right: 1px solid #ddd;
    }

    .tabs-left > .nav-tabs > li > a {
        margin-right: -1px;
        -webkit-border-radius: 4px 0 0 4px;
        -moz-border-radius: 4px 0 0 4px;
        border-radius: 4px 0 0 4px;
    }

    .tabs-left > .nav-tabs > li > a:hover,
    .tabs-left > .nav-tabs > li > a:focus {
        border-color: #eeeeee #dddddd #eeeeee #eeeeee;
    }

    .tabs-left > .nav-tabs .active > a,
    .tabs-left > .nav-tabs .active > a:hover,
    .tabs-left > .nav-tabs .active > a:focus {
        border-color: #ddd transparent #ddd #ddd;
        *border-right-color: #ffffff;
    }




</style>

<!--<script>-->
<!--    $('.button--bubble').each(function() {-->
<!--        var $circlesTopLeft = $(this).parent().find('.circle.top-left');-->
<!--        var $circlesBottomRight = $(this).parent().find('.circle.bottom-right');-->
<!---->
<!--        var tl = new TimelineLite();-->
<!--        var tl2 = new TimelineLite();-->
<!---->
<!--        var btTl = new TimelineLite({ paused: true });-->
<!---->
<!--        tl.to($circlesTopLeft, 1.2, { x: -25, y: -25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false) });-->
<!--        tl.to($circlesTopLeft.eq(0), 0.1, { scale: 0.2, x: '+=6', y: '-=2' });-->
<!--        tl.to($circlesTopLeft.eq(1), 0.1, { scaleX: 1, scaleY: 0.8, x: '-=10', y: '-=7' }, '-=0.1');-->
<!--        tl.to($circlesTopLeft.eq(2), 0.1, { scale: 0.2, x: '-=15', y: '+=6' }, '-=0.1');-->
<!--        tl.to($circlesTopLeft.eq(0), 1, { scale: 0, x: '-=5', y: '-=15', opacity: 0 });-->
<!--        tl.to($circlesTopLeft.eq(1), 1, { scaleX: 0.4, scaleY: 0.4, x: '-=10', y: '-=10', opacity: 0 }, '-=1');-->
<!--        tl.to($circlesTopLeft.eq(2), 1, { scale: 0, x: '-=15', y: '+=5', opacity: 0 }, '-=1');-->
<!---->
<!--        var tlBt1 = new TimelineLite();-->
<!--        var tlBt2 = new TimelineLite();-->
<!---->
<!--        tlBt1.set($circlesTopLeft, { x: 0, y: 0, rotation: -45 });-->
<!--        tlBt1.add(tl);-->
<!---->
<!--        tl2.set($circlesBottomRight, { x: 0, y: 0 });-->
<!--        tl2.to($circlesBottomRight, 1.1, { x: 30, y: 30, ease: SlowMo.ease.config(0.1, 0.7, false) });-->
<!--        tl2.to($circlesBottomRight.eq(0), 0.1, { scale: 0.2, x: '-=6', y: '+=3' });-->
<!--        tl2.to($circlesBottomRight.eq(1), 0.1, { scale: 0.8, x: '+=7', y: '+=3' }, '-=0.1');-->
<!--        tl2.to($circlesBottomRight.eq(2), 0.1, { scale: 0.2, x: '+=15', y: '-=6' }, '-=0.2');-->
<!--        tl2.to($circlesBottomRight.eq(0), 1, { scale: 0, x: '+=5', y: '+=15', opacity: 0 });-->
<!--        tl2.to($circlesBottomRight.eq(1), 1, { scale: 0.4, x: '+=7', y: '+=7', opacity: 0 }, '-=1');-->
<!--        tl2.to($circlesBottomRight.eq(2), 1, { scale: 0, x: '+=15', y: '-=5', opacity: 0 }, '-=1');-->
<!---->
<!--        tlBt2.set($circlesBottomRight, { x: 0, y: 0, rotation: 45 });-->
<!--        tlBt2.add(tl2);-->
<!---->
<!--        btTl.add(tlBt1);-->
<!--        btTl.to($(this).parent().find('.button.effect-button'), 0.8, { scaleY: 1.1 }, 0.1);-->
<!--        btTl.add(tlBt2, 0.2);-->
<!--        btTl.to($(this).parent().find('.button.effect-button'), 1.8, { scale: 1, ease: Elastic.easeOut.config(1.2, 0.4) }, 1.2);-->
<!---->
<!--        btTl.timeScale(2.6);-->
<!---->
<!--        $(this).on('mouseover', function() {-->
<!--            btTl.restart();-->
<!--        });-->
<!--    });-->
<!--</script>-->

<!--<style>-->
<!--    $dark-blue: #222;-->
<!--    $green: #90feb5;-->
<!--    $action-color: $green;-->
<!---->
<!--    * {-->
<!--        box-sizing: border-box;-->
<!--    }-->
<!---->
<!--    div{-->
<!--        display: block;-->
<!--        height: 100%;-->
<!--        animation: hue-rotate 10s linear infinite;-->
<!--    }-->
<!---->
<!--    .button {-->
<!--        -webkit-font-smoothing: antialiased;-->
<!--        background-color: $dark-blue;-->
<!--        border: none;-->
<!--        color: #fff;-->
<!--        display: inline-block;-->
<!--        font-family: 'Montserrat', sans-serif;-->
<!--        font-size: 14px;-->
<!--        font-weight: 100;-->
<!--        text-decoration: none;-->
<!--        user-select: none;-->
<!--        letter-spacing: 1px;-->
<!--        color: white;-->
<!--        padding: 20px 40px;-->
<!--        text-transform: uppercase;-->
<!--        transition: all 0.1s ease-out;-->
<!---->
<!--    &:hover {-->
<!--         background-color: $action-color;-->
<!--         color: #fff;-->
<!--     }-->
<!---->
<!--    &:active {-->
<!--         transform: scale(0.95);-->
<!--     }-->
<!---->
<!--    &--bubble {-->
<!--         position: relative;-->
<!--         z-index: 2;-->
<!--         color: white;-->
<!--         background: none;-->
<!---->
<!--    &:hover {-->
<!--         background: none;-->
<!--     }-->
<!---->
<!--    &:hover + .button--bubble__effect-container .circle {-->
<!--         background: darken($action-color, 15%);-->
<!--     }-->
<!---->
<!--    &:hover + .button--bubble__effect-container .button {-->
<!--         background: darken($action-color, 15%);-->
<!--     }-->
<!---->
<!--    &:active + .button--bubble__effect-container {-->
<!--         transform: scale(0.95);-->
<!--     }-->
<!---->
<!--    &__container {-->
<!--         position: relative;-->
<!--         display: inline-block;-->
<!---->
<!--    .effect-button {-->
<!--        position: absolute;-->
<!--        width: 50%;-->
<!--        height: 25%;-->
<!--        top: 50%;-->
<!--        left: 25%;-->
<!--        z-index: 1;-->
<!--        transform: translateY(-50%);-->
<!--        background: $dark-blue;-->
<!--        transition: background 0.1s ease-out;-->
<!--    }-->
<!--    }-->
<!--    }-->
<!--    }-->
<!---->
<!--    .button--bubble__effect-container {-->
<!--        position: absolute;-->
<!--        display: block;-->
<!--        width: 200%;-->
<!--        height: 400%;-->
<!--        top: -150%;-->
<!--        left: -50%;-->
<!--        -webkit-filter: url("#goo");-->
<!--        filter: url("#goo");-->
<!--        transition: all 0.1s ease-out;-->
<!--        pointer-events: none;-->
<!---->
<!--    .circle {-->
<!--        position: absolute;-->
<!--        width: 25px;-->
<!--        height: 25px;-->
<!--        border-radius: 15px;-->
<!--        background: $dark-blue;-->
<!--        transition: background 0.1s ease-out;-->
<!---->
<!--    &.top-left {-->
<!--         top: 40%;-->
<!--         left: 27%;-->
<!--     }-->
<!---->
<!--    &.bottom-right {-->
<!--         bottom: 40%;-->
<!--         right: 27%;-->
<!--     }-->
<!--    }-->
<!--    }-->
<!---->
<!--    .goo {-->
<!--        position: absolute;-->
<!--        visibility: hidden;-->
<!--        width: 1px;-->
<!--        height: 1px;-->
<!--    }-->
<!---->
<!--    html, body {-->
<!--        width: 100%;-->
<!--        height: 100%;-->
<!--        text-align: center;-->
<!--    }-->
<!---->
<!--    .button--bubble__container {-->
<!--        top: 50%;-->
<!--        margin-top: -25px;-->
<!--    }-->
<!---->
<!--    @keyframes hue-rotate {-->
<!--        from {-->
<!--            -webkit-filter: hue-rotate(0);-->
<!--            -moz-filter: hue-rotate(0);-->
<!--            -ms-filter: hue-rotate(0);-->
<!--            filter: hue-rotate(0);-->
<!--        }-->
<!--        to {-->
<!--            -webkit-filter: hue-rotate(360deg);-->
<!--            -moz-filter: hue-rotate(360deg);-->
<!--            -ms-filter: hue-rotate(360deg);-->
<!--            filter: hue-rotate(360deg);-->
<!--        }-->
<!--    }-->
<!--</style>-->









        <div style="margin-bottom: 50px" class="col-lg-12 col-md-12 col-sm-12">
            <div id="single_sidebar">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#ilan" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">Profil Görünümü</a>
                    </li>
                    <li role="presentation" >
                        <a href="#aktivite" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">Üyelik Bilgilerim</a>
                    </li>
                    <li role="presentation" >
                        <a href="#duyuru" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">Kişisel Resimlerim</a>
                    </li>
                    <li role="presentation" >
                        <a href="#video" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">Videolarım</a>
                    </li>
                    <li role="presentation" >
                        <a href="#haber" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">	İçerik Ekleme</a>
                    </li>
                    <li role="presentation" >
                        <a href="#ok" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">Oturumu Kapat</a>
                    </li>
                </ul>

                <div class="tab-content"    >

                    <div role="tabpanel" class="tab-pane active" id="ilan">



                        <!-- Editable table -->
                        <div class="card">
                            <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Profil Bilgileri</h3>
                            <div class="card-body">
                                <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"></a></span>
                                    <table class="table table-bordered table-responsive-md table-striped text-center">
                                        <tr>


                                        </tr>
                                        <tr>
                                            <td class="pt-3-half" >Adı Soyadı:</td>
                                            <td class="pt-3-half" ><?=$veri[0]->adsoy?></td>






                                        </tr>
                                        <!-- This is our clonable table line -->
                                        <tr>
                                            <td class="pt-3-half" >Cinsiyet:</td>
                                            <td class="pt-3-half" ><?=$veri[0]->cinsiyet?></td>



                                        </tr>
                                        <!-- This is our clonable table line -->
                                        <tr>
                                            <td class="pt-3-half" >E-mail Adresi:</td>
                                            <td class="pt-3-half" ><?=$veri[0]->email?></td>


                                        </tr>
                                        <!-- This is our clonable table line -->
                                        <tr >
                                            <td class="pt-3-half" >Telefon No:</td>
                                            <td class="pt-3-half" ><?=$veri[0]->tel    ?></td>



                                        </tr>
                                        <tr >
                                            <td class="pt-3-half" >Şifre:</td>
                                            <td class="pt-3-half" ><?=$veri[0]->sifre    ?></td>



                                        </tr>
                                        <tr>
                                            <td class="pt-3-half" >Resim:</td>

                                                <?php if($veri[0]->resim)
                                                {?>
                                                    <td class="pt-3-half" >     <a href ="<?=base_url()?>/anasayfa/resimekle/<?=$veri[0]->Id?>"><img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" width="150px" height="70px"></a>
                                                </td>
                                                <?php } else {?><td class="pt-3-half" ><a  style="width: 150px;float:; " href ="<?=base_url()?>/anasayfa/resimekle/<?=$veri[0]->Id?>"  class="btn btn-block btn-success btn-xs">Resim Ekle</a></td><?php } ?>

                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Editable table -->

                            <br>

                    </div>

                    <div role="tabpanel" class="tab-pane" id="aktivite">
                        <div class="left_content">
                            <div class="contact_area">
                                <h2>Üyelik Bilgilerini Düzenle</h2>
                                <form action="<?=base_url()?>/anasayfa/profil_duzenle/<?=$veri[0]->Id?>" method="post" class="contact_form">
                                    <input class="form-control" value="<?=$veri[0]->adsoy?>" name="adsoy" type="text" placeholder="Ad Soyad*" required>
                                    <input class="form-control" value="<?=$veri[0]->email?>" name="email" type="email" placeholder="E-mail*" required>
                                    <input class="form-control"value="<?=$veri[0]->sifre?>" name="sifre" type="password" placeholder="Şifre*" required>
                                    <br>
                                    <input class="form-control" value="<?=$veri[0]->tel?>" name="tel" type="text" placeholder="Telefon*" >
                                    <span>Cinsiyet</span>
                                    <select name="cinsiyet">
                                        <option><?=$veri[0]->cinsiyet?></option>
                                        <option>Erkek</option>
                                        <option>Kadın</option>
                                    </select>

                                    <input type="submit" value="Kaydet">
                                </form>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="duyuru">
                        <div class="single_post_content">
                            <h2><span>Resimlerim</span></h2>
                            <ul class="photograph_nav  wow fadeInDown">

                                    <li>
                                        <div class="photo_grid" >
                                            <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button"  title="Photography Ttile 1"> <img style="height: 80px;height: 80px" src="<?=base_url()?>/uploads/<?=$veri[0]->resim?>" /></a> </figure>
                                        </div>
                                    </li>


                            </ul>
                        </div>


                    </div>

                    <div  role="tabpanel" class="tab-pane" id="video">
                    <form action="<?=base_url()?>/anasayfa/video_ekle/<?=$this->session->uye_session["id"]?>" method="post" class="contact_form">

                        <p><b>Sadece youtube videosu ekleyebilirsiniz <br> Video eklemek için<br> 1-Youtube üzerinde paylaş butonuna tıklayın<br> 2-Açılan pencerede BAĞLANTIYI PAYLAŞIN sekmesinin altındaki YERLEŞTİR butonuna tıklayın<br> 3-Açılan sekmenin sağındaki videoyu yerleştirinin altında, iframe ile başlayan yerdeki srcnin içini tırnakları almayacak şekilde kopyalayın<br> Örnek https://www.youtube.com/embed/k20iDh7IVak </b></p>
                        <input class="form-control"  name="ytvideo" type="text" placeholder="Sadece src'nin içi" required>

                        <input type="submit" value="Kaydet">
                        <br>
                        <?php foreach ($videolar as $rs) {?>
<div style="width: 365px;height: 280px;float: left;margin-top: 50px">
                            <iframe width="365" height="280" src="<?=$rs->video?>" frameborder="10" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <a class="btn btn-danger" style="width: 360px;margin-left: 5px" href="<?=base_url()?>/anasayfa/video_sil/<?=$rs->Id?>">Sil</a>
</div>
    <?php } ?>
                    </div>


                    <div role="tabpanel" class="tab-pane" id="haber">
                        <div class="card">
                           <h2 style="margin-left: 40%">Yüklenen İçerikler <a class="btn btn-info" href="<?=base_url()?>/anasayfa/icerik_ekle/<?=$veri[0]->Id?>" style="margin-left: 31%; width: 170px;height: 40px">İÇERİK EKLE</a> </h2>

                            <div class="card-body">
                                <div id="table" class="table-editable">
                                    <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"></a></span>
                                    <table class="table table-bordered table-responsive-md table-striped text-center">
                                      <?php foreach ($icerik as $rs) { ?>
                                        <tr>
                                            <td class="pt-3-half" contenteditable="true">İçerik Başlığı:</td>
                                            <td class="pt-3-half" contenteditable="true"><?=$rs->başlık?></td>
                                        </tr>
                                        <!-- This is our clonable table line -->
                                        <tr>
                                            <td class="pt-3-half" contenteditable="true">İçerik:</td>
                                            <td class="pt-3-half" contenteditable="true"><?=$rs->detay?></td>
                                             <td class="pt-3-half" contenteditable="true">
                                                 <form action="<?=base_url()?>/anasayfa/icerik_duzenleme/<?=$rs->Id?>" method="post">
                                                 <button  type="submit"  class="btn btn-primary";">Düzenle</button>
                                                 </form>
                                                 </td>
                                        </tr>
                                        </tr>

                                              <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div role="tabpanel" class="tab-pane" id="ok">
                        <div class="card">


                            <div class="card-body">
                                <div id="table" class="table-editable">
                                    <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"></a></span>

                                       <a href="<?=base_url()?>/anasayfa/cikis" class="btn btn-info">Çıkış yap</a>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



<br>
<br>







