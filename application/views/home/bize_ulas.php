<section id="contentSection">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="left_content">
                <div class="contact_area">
                    <h2>Bize UlaS</h2><br>
               <p>     <?=$iletisim[0]->iletişim?></p><br><br>

                    <img w src="<?=base_url()?>uploads/a.jpg">

                    <form style="margin-top: 50px" action="<?=base_url()?>/anasayfa/mesaj_kaydet" method="post" class="contact_form">
                        <input class="form-control" name="adsoy" type="text" placeholder="İsim*" required>
                        <input class="form-control" name="email" type="email" placeholder="E-mail*" required>
                        <textarea class="form-control" name="mesaj" cols="30" rows="10" placeholder="Mesajınız*" required></textarea>
                        <input type="submit" value="Mesajı Gönder">
                    </form>
                </div>
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
</section>