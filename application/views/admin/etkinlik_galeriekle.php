
<style>
    .containerr{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    img{
        margin: 5px;
        transition: all 1s;
    }
    img:hover{
        transform: scale(1.1)
    }
</style>

    <div class="container-fluid">

    <!-- Breadcrumbs-->


    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Resim Ekle</div>
            <div class="card-body">
                <form method="post" action="<?=base_url()?>admin/etkinlikler/galeri_upload/<?=$id?>" enctype="multipart/form-data">

                    <input type="file" name="userfile" size="20"/>
                    <input type="submit" value="Yükle" />



                </form>
            </div>
        </div>
        <h1 style="margin-left: 400px;margin-bottom: 100px;margin-top: 50px">Galerideki Resimler</h1>
        <div class="containerr">
            <?php
                                       foreach ($veriler as $rs)
                                        {
                                        ?>
         <div>   <img width="323" height="156" src="<?=base_url()?>/uploads/<?=$rs->resim?>">
            <a style="width: 327px;height: 40px;margin-left: 3px" href ="<?=base_url()?>admin/etkinlikler/galeri_sil/<?=$rs->Id?>" onclick="return confirm('Emin misin?')"  class="btn btn-block btn-danger btn-xs">Sil</a>
         </div>
<?php }?>
        </div>
    </div>






<?php
$this->load->view('admin\_footer');

?>