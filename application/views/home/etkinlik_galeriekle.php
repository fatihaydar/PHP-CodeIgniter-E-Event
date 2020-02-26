
<div class="col-lg-8 col-md-8 col-sm-8">
    <div class="left_content">
        <div class="error_page">
            <form method="post" action="<?=base_url()?>anasayfa/galeri_upload/<?=$id?>" enctype="multipart/form-data">

                <input type="file" name="userfile" size="20"/>
                <input type="submit" value="Yükle" />



            </form>  </div>
    </div>
    <div class="fashion_technology_area">

    </div>
    <div class="single_post_content">
        <h2><span>Galerideki Resimler</span></h2>
        <ul class="photograph_nav  wow fadeInDown">
            <?php foreach ($veriler as $rs)
            {

                ?>
                <li>
                    <div class="photo_grid" >
                        <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>" title="Photography Ttile 1"> <img style="height: 80px;height: 80px" src="<?=base_url()?>/uploads/<?=$rs->resim?>" /></a></figure>
                    </div>
                </li>
            <?php } ?>

        </ul>
    </div>

</div>
<div class="col-lg-4 col-md-4 col-sm-4">
    <aside class="right_content">
        <div class="single_sidebar">
            <h2><span>Son Etkinlikler</span></h2>
            <ul class="spost_nav">
                <?php foreach ($etk as $rs)
                {

                    ?>
                    <li>
                        <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <a href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>" class="media-left"> <img alt="" src="<?=base_url()?>/uploads/<?=$rs->resim?>"> </a>
                            <div class="media-body"> <a href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>" class="catg_title"> <?=$rs->başlık?></a> </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </aside>
</div>
</div>





