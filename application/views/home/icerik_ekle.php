<script src="<?=base_url()?>/assets/ckeditor/ckeditor.js" xmlns="http://www.w3.org/1999/html"></script>


<section id="contentSection">
<div class="page-header">
    <div class="container">
        <div class="section-head style_2 text-left" style="width: 1050px">

            <h2 style="margin-left: 400px;margin-bottom: 50px">İçerik Ekleme</h2>

                <form action="<?=base_url()?>/anasayfa/icerik_ekle_kaydet/<?=$veri[0]->Id?>" method="post" class="contact-form">
                <label > İçerik başlığı</label>
                <input class="form-control" name="başlık" type="text" placeholder="Başlık*" required>
                <br>
                <label > İçerik açıklaması</label>
                <input class="form-control" name="açıklama" type="text" placeholder="Açıklama*" >
                    <br>
                    <label>Anahtar Kelimeler</label>
                    <input class="form-control" name="keywords" type="text" placeholder="Anahtar Kelimeler*" >
                    <br>
                <label>İçerik Detayı</label>

            <textarea id="editor"  name="detay" ></textarea>
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