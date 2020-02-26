<section id="contentSection">
    <div class="row">
        <?php foreach ($icrk as $rs) { ?>
        <div class="fashion" style="width: 240px; margin-left: 3%;height: 350px">

            <div class="single_post_content" >

                <ul class="business_catgnav wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown; width: 240px">

                    <li>

                        <figure class="bsbig_fig"> <a href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>" class="featured_img"> <img alt="" src="<?=base_url()?>/uploads/<?=$rs->resim?>"> <span class="overlay"></span> </a>
                            <figcaption> <a href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>"><?=$rs->başlık?></a> </figcaption>
                            <p><?=$rs->açıklama?></p>
                        </figure>

                    </li>

                </ul>

            </div>

        </div>
        <?php } ?>
    </div>
</section>