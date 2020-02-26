
<section  id="sliderSection">

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="slick_slider">
                <?php
                foreach ($veri as $rs)
                {
                    ?>
                <div class="single_iteam"> <a href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>"> <img src="<?=base_url()?>/uploads/<?=$rs->resim?>" alt=""></a>
                    <div class="slider_article">
                        <h2><a class="slider_tittle" href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>"><?=$rs->başlık?></a></h2>
                        <p><?=$rs->açıklama?></p>
                        <p><a style="color:yellow  ;" href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>"> Ayrıntılar için tıklayınız</a></p>
                    </div>
                </div>

                <?php } ?>
            </div>
        </div>



        <div style="opacity: " class="col-lg-4 col-md-4 col-sm-4">
            <div id="single_sidebar">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#ilan" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">İlan Panosu</a>
                    </li>
                    <li role="presentation" >
                        <a href="#aktivite" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">Aktivitelerimiz</a>
                    </li>
                    <li role="presentation" >
                        <a href="#duyuru" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">Duyurular</a>
                    </li>
                    <li role="presentation" >
                        <a href="#haber" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false" >Haber &amp; Etkinlikler</a>
                    </li>
                </ul>

                <div class="tab-content" >

                    <div role="tabpanel" class="tab-pane active" id="ilan">
                        <?php
                        foreach ($veriiii as $rs)
                        {
                            ?>
                        <div><a href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>"><img style="width: 75px;height: 75px" src="<?=base_url()?>/uploads/<?=$rs->resim?>">

                                <p  style="width: 260px ;font-weight: bold; float: right;clear: right;color: black"><?=$rs->açıklama?></p></a>
                        </div>
                            <br>
                        <?php } ?>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="aktivite">
                        <?php
                        foreach ($aktivite as $rs)
                        {
                            ?>
                            <div><a href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>"> <img style="width: 75px;height: 75px" src="<?=base_url()?>/uploads/<?=$rs->resim?>">
                                <p style="font-weight: bold; float: right;clear: right;color: black"><?=$rs->açıklama?></p></a>
                            </div>
                            <br>
                        <?php } ?>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="duyuru">
                        <?php
                        foreach ($veriii as $rs)
                        {
                            ?>
                        <div><a href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>"><img style="width: 75px;height: 75px" src="<?=base_url()?>/uploads/<?=$rs->resim?>">
                                <p style="font-weight: bold; float: right;clear: right;color: black"><?=$rs->açıklama?></p></a>
                        </div>
                            <br>
                        <?php } ?>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="haber">
                        <?php
                        foreach ($haberr as $rs)
                        {
                            ?>
                            <div><a href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>"><img style="width: 75px;height: 75px" src="<?=base_url()?>/uploads/<?=$rs->resim?>">
                                    <p style="font-weight: bold; float: right;clear: right;color: black"><?=$rs->açıklama?></p></a>
                            </div>
                            <br>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>


    </div>
</section>
<section id="contentSection" >
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="left_content">
                <div class="single_post_content">
                    <h2><span>Etkinlikler</span></h2>
                    <div  class="single_post_content_left">
                        <ul class="business_catgnav  wow fadeInDown">
                            <?php
                            foreach ($son as $rs)
                            {
                            ?>
                            <li>
                                <figure class="bsbig_fig"> <a href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>" class="featured_img"> <img      alt="" src="<?=base_url()?>/uploads/<?=$rs->resim?>"> <span class="overlay"></span> </a>
                                    <figcaption> <a href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>" ><?=$rs->başlık?> </a> </figcaption>
                                    <p><?=$rs->açıklama?><?=$rs->detay?></p>
                                </figure>
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                    <div class="single_post_content_right">
                        <ul class="spost_nav">
                            <?php
                            foreach ($dort as $rs)
                            {
                            ?>
                            <li>
                                <div class="media wow fadeInDown"> <a href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>" class="media-left"> <img alt="" src="<?=base_url()?>/uploads/<?=$rs->resim?>"> </a>
                                    <div class="media-body"> <a href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>" class="catg_title"> <?=$rs->başlık?></a> </div>
                                </div>
                            </li>
                            <?php
                       } ?>

                        </ul>
                    </div>
                </div>
                <div class="fashion_technology_area">

                </div>
                <div class="single_post_content">
                    <h2><span>Foto Galeri</span></h2>
                    <ul class="photograph_nav  wow fadeInDown">
                        <?php foreach ($veri as $rs)
                            {

                            ?>
                        <li>
                            <div class="photo_grid" >
                                <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>" title="Photography Ttile 1"> <img style="height: 80px;height: 80px" src="<?=base_url()?>/uploads/<?=$rs->resim?>" alt="<?=$rs->açıklama?>"/></a> <?=$rs->açıklama?></figure>
                            </div>
                        </li>
                        <?php } ?>

                    </ul>
                </div>
                <div class="single_post_content">

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <aside class="right_content">
                <div class="single_sidebar">
                    <h2><span>Üyelerimizden Makaleler</span></h2>
                    <ul class="spost_nav">
                        <?php foreach ($makale as $rs)
                            {

                            ?>
                        <li>
                            <div class="media wow fadeInDown"> <a href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>" class="media-left"> <img alt="" src="<?=base_url()?>/uploads/<?=$rs->resim?>"> </a>
                                <div class="media-body"> <a href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>" class="catg_title"> <?=$rs->açıklama?></a> </div>
                            </div>
                        </li>
                        <?php } ?>

                    </ul>
                </div>
                <div class="single_sidebar">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
                        <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
                        <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">Comments</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="category">

                        </div>
                        <div role="tabpanel" class="tab-pane" id="video">
                            <div class="vide_area">
                                <iframe width="100%" height="250" src="https://www.youtube.com/embed/watch?v=NEty9xX0ySU" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="comments">

                        </div>
                    </div>
                </div>
                <div class="single_sidebar wow fadeInDown">
                    <h2><span>Sponsor</span></h2>
                    <a class="sideAdd" href="#"><img src="images/add_img.jpg" alt=""></a> </div>
                <div class="single_sidebar wow fadeInDown">

                </div>
                <div class="single_sidebar wow fadeInDown">

                </div>
            </aside>
        </div>
    </div>
</section>