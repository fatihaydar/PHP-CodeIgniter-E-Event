<section id="contentSection">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="left_content">
                <div class="contact_area">
                    <h2 style="margin-left: 350px">Kayıt Ol</h2>
                    <form action="<?=base_url()?>/anasayfa/uye_kaydet" method="post" class="contact_form">
                        <input class="form-control" name="adsoy" type="text" placeholder="İsim*" required>
                        <input class="form-control" name="sifre" type="password" placeholder="Şifre*" required>
                        <br>
                        <input class="form-control" name="tel" type="text" placeholder="Telefon*" required>
                        <input class="form-control" name="email" type="email" placeholder="E-mail*" required>
                        <select name="cinsiyet" class="form-control">
                            <option>Erkek</option>
                            <option>Kadın</option>
                        </select>
                        <br>
                        <br>
                        <input style="margin-left: 580px" type="submit" value="Kaydı Tamamla">
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