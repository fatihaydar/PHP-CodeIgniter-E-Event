<script src="<?=base_url()?>/assets/ckeditor/ckeditor.js" xmlns="http://www.w3.org/1999/html"></script>


<section id="contentSection">
<div class="page-header">
    <div class="container">
        <div class="section-head style_2 text-left" style="width: 1050px">
            <?php
            foreach ($icerikk as $rs)
            {
            ?><h2 style="margin-left: 400px;margin-bottom: 50px">İçerik Düzenleme</h2>

                <form action="<?=base_url()?>/anasayfa/icerik_duzenle/<?=$rs->Id?>" method="post" class="contact-form">
                <label > İçerik başlığı</label>
                <input class="form-control"value="<?=$rs->başlık?>" name="başlık" type="text" placeholder="Başlık*" required>
                <br>
                <label > İçerik açıklaması</label>
                <input class="form-control" value="<?=$rs->açıklama?>" name="açıklama" type="text" placeholder="Açıklama*" >
                    <br>
                <label>İçerik Detayı</label>

            <textarea id="editor"  name="detay" ><?=$rs->detay?></textarea>
<br>

                     <label>Kategori</label> <br>
                    <select name="kategori">
                        <?php foreach ($kategori as $rc) {?>
                        <option><?=$rc->başlık?></option>
                        <?php } ?>
                    </select>

                    <button  style="float: right;margin-top: 20px" type="submit" class="btn btn-success">Kaydet</button>
                    <br>
                    <br>
        </form>

            <?php } ?>

            <div class="single_post_content">
                <h2><span>İçerik Fotoğraf Galerisi</span></h2>
                <ul class="photograph_nav  wow fadeInDown">
                    <?php foreach ($foto as $rs)
                    {

                        ?>
                        <li>
                            <div class="photo_grid" >
                                <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?=base_url()?>/anasayfa/etkinlige_git/<?=$rs->Id?>" title="Photography Ttile 1"> <img style="height: 80px;height: 80px" src="<?=base_url()?>/uploads/<?=$rs->resim?>" /></a></figure>
                            </div>
                        </li>
                    <?php } ?>

                </ul>
                <a  style="font-size: 20px;margin-top: 440px;height: 35px" href ="<?=base_url()?>/anasayfa/galeriekle/<?=$icerikk[0]->Id?>"  class="btn btn-block btn-info btn-xs">Galeri Ekle</a>

            </div>

        </div>
    </div>
</div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="row">




                </div>
            </div>

        </div>
    </div>


</section>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>