<div class="col-lg-8 col-md-8 col-sm-8">
    <div class="left_content">
        <div class="error_page">
            <h2>Profil Resmi Ekleme</h2>
            <form method="post" action="<?=base_url()?>anasayfa/resim_upload/<?=$id?>" enctype="multipart/form-data">

                <input style="margin-top: " type="file" name="userfile" size="20"/>
                <br>
                <br>
                <input style="float: left" type="submit" value="Yükle" />



            </form>  </div>
    </div>
    <div class="fashion_technology_area">

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
        

     

