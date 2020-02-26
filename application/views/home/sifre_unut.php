<section id="contentSection">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="left_content">
                <div class="contact_area">
                    <h2 style="margin-left: 350px">Şifremi Unuttum</h2>
                    <br>
                    <form style="margin-top: 35px" action="<?=base_url()?>/anasayfa/email_gonder" method="post" class="contact_form">
                        <label>Lütfen E-mail adresinizi girin.</label>
                        <input class="form-control" name="email" type="email" placeholder="E-mail*" required>

                        <input style="margin-top: 45px;margin-left: 580px;width: 130px" type="submit" value="Gönder">
                        <h4><?php if ($uyari){

                                echo $uyari;} ?></h4>
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