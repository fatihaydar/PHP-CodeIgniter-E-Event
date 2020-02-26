<div class="col-lg-8 col-md-8 col-sm-8">
    <div class="left_content">
        <div style="width: 700px" >
            <div style="margin-left: 20px;margin-top: 20px">   <h3   align="center"  ><?=$veri[0]->başlık?></h3>
               <p style="margin-top: 30px;"><i style="font-size:17px"><?=$veri[0]->detay?></i></p></div>
            <?php if ($veri[0]->kategori == "katilim") {


                if ($etkk != NULL){
                if ($etkk[0]->uye_id==$this->session->uye_session["id"] && $etkk[0]->etkinlik_id==$veri[0]->Id) { ?>
                <div  align="center" style="margin-top: 50px;"><a href="" class="btn btn-orange" style="width: 350px"> Etkinliğe  Katıldınız    </a></div>

                <?php }} elseif($this->session->uye_session["id"]!=NULL){ ?>
            <div  align="center" style="margin-top: 50px;"><a href="<?=base_url()?>anasayfa/etkinlik_katil/<?=$veri[0]->Id?>" class="btn btn-orange" style="width: 350px"> Etkinliğe  Katıl    </a></div>

            <?php } else {?>
                <div  align="center" style="margin-top: 50px;"><a href="<?=base_url()?>anasayfa/uye_ol" class="btn btn-orange" style="width: 500px"> Etkinliğe  Katılabilmek İçin Üye Olmalısınız-Üye Olmak İçin Tıklayınız    </a></div>

         <?php   } } ?>

            <span></span>  </div>
    </div>
    <div class="fashion_technology_area">

    </div>
    <div style="margin-top: 20px" class="single_post_content">
        <h2><span>Foto Galeri</span></h2>
        <ul class="photograph_nav  wow fadeInDown">
            <?php foreach ($foto as $rs)
            {

                ?>
                <li>
                    <div class="photo_grid" >
                        <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button"  title="Photography Ttile 1"> <img style="height: 80px;height: 80px" src="<?=base_url()?>/uploads/<?=$rs->resim?>" /></a></figure>
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